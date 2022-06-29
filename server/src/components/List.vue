<template>
  <div id="app">
    <h2>TODO List</h2>
    <button @click="purge">Purge</button>
    <h1>{{ remaining.length }}/{{ todos.length }}</h1>

    <form v-on:submit.prevent>
      <input type="text" v-model="newItem" />
      <button v-on:click="addItem">Add</button>
    </form>

    <table v-if="todos.length">
      <tr v-for="(todo, index) in todos" :key="index">
        <td><input type="checkbox" v-model="todo.isDone" /></td>
        <td>
          <span :class="{ done: todo.isDone }">{{ todo.item }}</span>
        </td>
        <div v-if="todo.isActive">
          <span>
            <input type="text" v-model="todo.item" />
          </span>
          <button @click="updateDone(index)">完了</button>
        </div>
        <td>
          <button v-show="!todo.isActive" @click="updateItem(index)">
            edit
          </button>
        </td>
        <td><button @click="deleteItem(index)">Delete</button></td>
      </tr>
    </table>

    <table v-else>
      <p>to doがありません</p>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      newItem: "",
      todos: []
    };
  },
  watch: {
    todos: {
      handler: function() {
        localStorage.setItem("todos", JSON.stringify(this.todos));
      },
      deep: true
    }
  },
  mounted: function() {
    this.todos = JSON.parse(localStorage.getItem("todos")) || [];
  },
  methods: {
    addItem: function(event) {
      if (this.newItem === "") {
        confirm("何も入力されていません");
        return;
      }
      var todo = {
        item: this.newItem,
        isDone: false,
        isActive: false
      };
      this.todos.push(todo);
      this.newItem = "";
    },
    deleteItem: function(index) {
      this.todos.splice(index, 1);
    },
    purge: function() {
      this.todos = this.remaining;
    },
    updateItem(index) {
      this.todos[index].isActive = true;
      this.todos[index].item = this.todos[index].item;
    },
    updateDone(index) {
      this.todos[index].isActive = false;
    }
  },
  computed: {
    remaining: function() {
      return this.todos.filter(function(todo) {
        return !todo.isDone;
      });
    }
  }
};
</script>

<style>
#app table {
  margin-left: auto;
  margin-right: auto;
  text-align: left;
}
#app span.done {
  text-decoration: line-through;
}
</style>
