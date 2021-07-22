// 'use strict';

// // このあとやること
// // この地名の数字の変化  --------------ok    配列使わない方法でやればよりシンプル
// // 選択肢の変化   ---------------------OK
// // imgの変化------------------------  一応ok 配列使わない方法でやればよりシンプル
// // 選択肢の順番シャッフル-----------------OK
// // liをクリックしたら色を変化  (if ===) ?????
// //文字表示 



// // 要素を繰り返す
// // htmlを修正しないで

// {

//   let s = 0;

//     while(s < 10){
//       s = s + 1;
//     };

//   // containre
//   const container = document.createElement("div"); //div要素を作る
//   container.setAttribute("id", "container");       //#container を追加
//   container.setAttribute("class", "container");    // .containre を追加
//   //  box
//   const box = document.createElement("div");
//   box.setAttribute("id", "box");
//   box.setAttribute("class", "box");
//   // btn 
//   const btn = document.createElement("div");
//   btn.setAttribute("id", "btn");
//   btn.setAttribute("class", "btn");
//   // title
//   const num = [
//     [1],
//     [2],
//     [3],
//     [4],
//     [5],
//     [6],
//     [7],
//     [8],
//     [9],
//     [10],
//   ]; 
//   const title = document.createElement("p");
//   title.setAttribute("id", "title");
//   title.setAttribute("class", "title");
//   // img
//   const pic = [
//     ["./img/0.png"],
//     ["./img/1.png"],
//     ["./img/2.png"],
//     ["./img/3.png"],
//     ["./img/4.png"],
//     ["./img/5.png"],
//     ["./img/6.png"],
//     ["./img/7.png"],
//     ["./img/8.png"],
//     ["./img/9.png"],
//   ]; 
//   const img = document.createElement("img");
//   img.setAttribute("id", "img");
//   img.setAttribute("class", "img-fluid"); //レスポンシブ
//   // ul
//   const ul = document.createElement("ul");
//   ul.setAttribute("id", "ul");
//   // li   三個に複製する
//     const choices = [
//       ["たかなわ","こうわ","たかわ"],
//       ["かめいど","かめど","かめと"],
//           ["こうじまち","おかとまち","かゆまち"],
//           ["ごせいもん","おなりもん","おかどもん"],
//           ["とどろき","たたりき","たたら"],
//           ["せきこうい","いじい","しゃくじい"],
//           ["ざっしょく","ざっしき","ぞうしき"],
//           ["みとちょう","おかちまち","ごしろちょう"],
//           ["ろっこつ","ししぼね","しこね"],
//           ["こぐれ","こばく","こしゃく"],
//         ]; 
//         // li   三個に複製する

//         function checkAnswer(li) {
// li.classList.add(_"pointer-events");  

//               if(li.textContent === choices[s][0]){ // 正解処理   
//                 li.classList.add("color-blue"); 
//               } else {                              // 不正解処理
//                 li.classList.add("color-red"); 
//                 li.setAttribute("disabled", true);
//               }  
//             }

//             function shuffle(arr) {
//               for (let k = arr.length - 1; k > 0; k--) { // i = ランダムに選ぶ終点のインデックス
//                 const j = Math.floor(Math.random() * (k + 1));  // j = 範囲内から選ぶランダム変数
//                 [arr[j], arr[k]] = [arr[k], arr[j]]; // 分割代入 i と j を入れ替える
//               }
//               return arr;
//             }

//             const shuffledChoices = shuffle([...choices[s]]);
//                 shuffledChoices.forEach(choice => {
//                   let li = document.createElement("li");
//                   li.setAttribute("id", "li");
//                   li.textContent = choice;
//                 });



//                 for(let i = 0; i < 10; i ++) {

//                   // containre
//       document.body.appendChild(container);           // containe を body に表示
//       //  box
//       container.appendChild(box);
//       // btn 
//       container.appendChild(btn);
//       // title
//       title.textContent = num[i] + ".この地名はなんと読む";
//       box.appendChild(title);
//       // img
//       img.setAttribute("src", pic[i]);
//       box.appendChild(img);
//       // ul
//       btn.appendChild(ul);
//       // li   三個に複製する

//           ul.appendChild(li);

//           li.addEventListener('click',() => {  // クリックイベントを追加
//         checkAnswer(li); // 正誤判定関数を実行
//   });

//       //  target
//       const target = document.createElement("div");
//   target.setAttribute("id", "target");
//   ul.appendChild(target);

//   //  success
//   const success = document.createElement("p");
//   success.setAttribute("id", "success");
//   target.appendChild(success);

//   //  successText
//   const successText = document.createElement("p");
//   successText.setAttribute("id", "successText");
//   target.appendChild(successText);
//   // End of  "要素を繰り返す
//   // htmlを修正しないで"
// };
//   };



//   //li
//   //シャフル
//   //クリックしたら色を変える
//   // li.classList.add("pointer-events");
//   // target3.classList.add("pointer-events");

//クリックしたら色を変える


// document.getElementById("matigai");


// li.addEventListener('click',() => {
//     li.classList.add("color-blue");
//       li.classList.add("color-red");
//         li.classList.add("pointer-events");
//         li.classList.add("pointer-events");
//     li.classList.add("pointer-events");
//   });

// const successNode1 = document.createTextNode('正解!');
// const successNode2 = document.createTextNode('正解は「たかなわ」です!');
// const falseNode1 = document.createTextNode('不正解!');
// const falseNode2 = document.createTextNode('正解は「たかなわ」です!');

//   // クリックしたら.textを追加
//   target1.onclick = function(){
//       const div = document.getElementById('target');
//       div.classList.add("target");

//       success.appendChild(successNode1);
//       success.classList.add("success");

//       successText.appendChild(successNode2);
//     }

//       //   target2.onclick = function(){
//         //     const div = document.getElementById('target');
//       //     div.classList.add("target");

//   success.appendChild(falseNode1);
//   success.classList.add("false");

//   successText.appendChild(falseNode2);
// }

// target3.onclick = function(){
//     const div = document.getElementById('target');
//     div.classList.add("target");

//     success.appendChild(falseNode1);
//     success.classList.add("false");

//     successText.appendChild(falseNode2);
//         //   }



//         // クリックしたら.colorを追加
//         // ボタン無効化// ｃssを当てる
//         document.getElementById("li").addEventListener('click',() => {
//           document.getElementById("li").classList.add("color-blue");
//           document.getElementById("li").classList.add("pointer-events");
//           target2.classList.add("pointer-events");
//           target3.classList.add("pointer-events");
// });


//   // target2.addEventListener('click',() => {
//     //     target1.classList.add("color-blue");
//     //     target2.classList.add("color-red");  
//   //   });

//       // target1.classList.add("pointer-events");
//       // target2.classList.add("pointer-events");
//       // target3.classList.add("pointer-events");

//     // target3.addEventListener('click',() => {
//       //     target1.classList.add("color-blue");
//       //     // target3.classList.add("color-red");

//       //     // target1.classList.add("pointer-events");
//       //     // target2.classList.add("pointer-events");
//       //     // target3.classList.add("pointer-events");
//       //   });




//       // function checkAnswer(li) {              // 正誤判定関数
//       //   if(li.textContent === choices[i][0]){ // 正解処理 
//       //     li.classList.add("color-blue");  
//       //     li.classList.add("pointer-events");
//       //   } else {                              // 不正解処理
//       //     li.classList.add("color-red"); 
//       //     // choices[i][0].classList.add("color-blue");  
//       //     li.classList.add("pointer-events");
//       //   }







// 'use strict';

// {
//   // html要素を作り、IDもつける

//   // containre
//   const container = document.createElement("div"); //div要素を作る
//   container.setAttribute("id", "container");       //#container を追加
//   container.setAttribute("class", "container");    // .containre を追加
//   //  box
//   const box = document.createElement("div");
//   box.setAttribute("id", "box");
//   box.setAttribute("class", "box");
//   // btn 
//   const btn = document.createElement("div");
//   btn.setAttribute("id", "btn");
//   btn.setAttribute("class", "btn");
//   // title
//   const num = [
//     [1],
//     [2],
//     [3],
//     [4],
//     [5],
//     [6],
//     [7],
//     [8],
//     [9],
//     [10],
//   ]; 
//   const title = document.createElement("p");
//   title.setAttribute("id", "title");
//   title.setAttribute("class", "title");
//   // img
//   const pic = [
//     ["./img/0.png"],
//     ["./img/1.png"],
//     ["./img/2.png"],
//     ["./img/3.png"],
//     ["./img/4.png"],
//     ["./img/5.png"],
//     ["./img/6.png"],
//     ["./img/7.png"],
//     ["./img/8.png"],
//     ["./img/9.png"],
//   ]; 
//   const img = document.createElement("img");
//   img.setAttribute("id", "img");
//   img.setAttribute("class", "img-fluid"); //レスポンシブ
//   // ul
//   const ul = document.createElement("ul");
//   ul.setAttribute("id", "ul");
//   // li   三個に複製する

//   //配列の中身をシャッフルする
//     const quizeSet = shuffle([
//       ["たかなわ","こうわ","たかわ"],
//       ["かめいど","かめど","かめと"],
//       ["こうじまち","おかとまち","かゆまち"],
//       ["ごせいもん","おなりもん","おかどもん"],
//       ["とどろき","たたりき","たたら"],
//       ["せきこうい","いじい","しゃくじい"],
//       ["ざっしょく","ざっしき","ぞうしき"],
//       ["みとちょう","おかちまち","ごしろちょう"],
//       ["ろっこつ","ししぼね","しこね"],
//       ["こぐれ","こばく","こしゃく"],
//     ]); 

//     let currentNum = 0;
//     let isAnswered;
//     let score = 0;

//     function shuffle(arr) {
//       for (let k = arr.length - 1; k > 0; k--) { // i = ランダムに選ぶ終点のインデックス
//         const j = Math.floor(Math.random() * (k + 1));  // j = 範囲内から選ぶランダム変数
//         [arr[j], arr[k]] = [arr[k], arr[j]]; // 分割代入 i と j を入れ替える
//       }
//       return arr;
//     }


//     for (let i = 0; i < array.length; i++) {

//     }

//     function checkAnswer(li) {
//       if(isAnswered){
//         return;
//       }
//       isAnswered = true;

//       if(li.textContent === quizeSet[currentNum][0]){ // 正解処理   
//         li.classList.add("color-blue"); 
//       } else {                              // 不正解処理
//         li.classList.add("color-red"); 
//       }  

//       li.classList.add("pointer-events");
//     }

//     function setQuiz() {
//       isAnswered = false;

//       const shuffledChoices = shuffle([...quizeSet[currentNum]]);

//         shuffledChoices.forEach(choice => {
//         const li1 = document.createElement("li");
//         li.setAttribute("id", "li");

//         li.textContent = choice;
//         //クリックしたときのイベント
//         li.addEventListener("click" , () => {
//           checkAnswer(li);
//         });
//         ul.appendChild(li);
//       });
//     }

//     const li = document.createElement("li");
//     li.setAttribute("id", "li");
//     //クリックしたらイベント
//     li.addEventListener("click" , () => {
//       if(li.classList.contains("pointer-events")){
//         return;
//       }
//       li.classList.add("pointer-events");
//     });




//     for(let i = 0; i < 10; i++){

//       // containre
//       document.body.appendChild(container);           // container を body に表示
//       //  box
//       container.appendChild(box);
//       // btn
//       container.appendChild(btn);
//       // title
//       // title.textContent = num[i] + ".この地名はなんと読む";
//       title.textContent ="1.この地名はなんと読む";
//       box.appendChild(title);
//       // img
//       // img.setAttribute("src", pic[i]);
//       img.setAttribute("src", pic[0]);
//       box.appendChild(img);
//       // ul
//       btn.appendChild(ul);
//       // li   三個に複製する

//       ul.appendChild(li);

//       //     li.addEventListener('click',() => {  // クリックイベントを追加
//       //   checkAnswer(li); // 正誤判定関数を実行
//       // });

//       //  target
//       const target = document.createElement("div");
//       target.setAttribute("id", "target");
//       ul.appendChild(target);

//       //  success
//       const success = document.createElement("p");
//       success.setAttribute("id", "success");
//       target.appendChild(success);

//       //  successText
//       const successText = document.createElement("p");
//       successText.setAttribute("id", "successText");
//       target.appendChild(successText);
//     };      
//       // End of  "要素を繰り返す
//       // htmlを修正しないで"

// };












'use strict';
{
  // 配列
  const quizeSet = ([
    ["たかなわ", "こうわ", "たかわ", 1],
    ["かめいど", "かめど", "かめと", 1],
    ["こうじまち", "おかとまち", "かゆまち", 1],
    ["ごせいもん", "おなりもん", "おかどもん", 1],
    ["とどろき", "たたりき", "たたら", 1],
    ["せきこうい", "いじい", "しゃくじい", 1],
    ["ざっしょく", "ざっしき", "ぞうしき", 1],
    ["みとちょう", "おかちまち", "ごしろちょう", 1],
    ["ろっこつ", "ししぼね", "しこね", 1],
    ["こぐれ", "こばく", "こしゃく", 1],
  ]);

  //配列の中身をシャッフル
  function shuffle(arr) {
    for (let k = 3 - 1; k > 0; k--) { // k = ランダムに選ぶ終点のインデックス
      const j = Math.floor(Math.random() * (k + 1));  // j = 範囲内から選ぶランダム変数
      [arr[j], arr[k]] = [arr[k], arr[j]]; // 分割代入 k と j を入れ替える
    }
    return arr;
  }
  quizeSet.map(shuffle);

  //ループ
  for (let i = 0; i < quizeSet.length; i++) {
    let h = '<div class="container" id="container">'
      + '<div class="box" id="box">'
      + '<p class="title" id="title">'
      + `${i + 1}.この地名はなんて読む？`
      + '</p>'
      + `<img class="img-fluid" src="./img/${i}.png" alt="選択肢の写真">`   //変数iを埋め込む
      + '</div>'
      + '<div class="btn" id="btn">'
      + '<ul id="ul">';
    for (var g = 0; g < 3; g++) {
      h += `<li class="list" id="${i}-${g}-1">${quizeSet[i][g]}</li>`;
      let id = `document.getElementById("${i}-${g}-1")`;
      // console.log(a);
    };
    h +=
      '<div id="target">'
      + '<p id="success"></p>'
      + '<p id="successText"></p>'
      + '</div>'
      + '</ul>'
      + '</div>'
      + '</div>';
    document.write(h);
  };




  // target
  const target = document.getElementById("target");
  //  success
  const success = document.getElementById("success");
  //  successText
  const successText = document.getElementById("successText");
  const successNode1 = document.createTextNode('正解!');
  const successNode2 = document.createTextNode('正解は「たかなわ」です!');
  const falseNode1 = document.createTextNode('不正解!');
  const falseNode2 = document.createTextNode('正解は「たかなわ」です!');

  //配列
  //  const quizeSet = ([
  //    {
  //      answers:["たかなわ","こうわ","たかわ"],
  //      correct:"たかなわ"
  //    },
  //    {
  //      answers:["かめいど","かめど","かめと"],
  //      correct:"かめいど"
  //    },
  //    {
  //      answers:["こうじまち","おかとまち","かゆまち"],
  //      correct:"こうじまち"
  //    },
  //    {
  //      answers:["ごせいもん","おなりもん","おかどもん",],
  //      correct:"ごせいもん"
  //    },
  //    {
  //      answers:["とどろき","たたりき","たたら"],
  //      correct:"とどろき"
  //    },
  //    {
  //      answers:["せきこうい","いじい","しゃくじい"],
  //      correct:"せきこうい"
  //    },
  //    {
  //      answers:["ざっしょく","ざっしき","ぞうしき"],
  //      correct:"ざっしょく"
  //    },
  //    {
  //      answers: ["みとちょう","おかちまち","ごしろちょう"],
  //      correct:"みとちょう"
  //    },
  //    {
  //      answers: ["ろっこつ","ししぼね","しこね"],
  //      correct:"ろっこつ"
  //    },
  //    {
  //      answers: ["こぐれ","こばく","こしゃく"],
  //      correct:"こぐれ"
  //    },
  //  ]);

  //  // console.log(quizeSet[0].answers[0]);

  //  //配列の中身をシャッフルする
  //  function shuffle(arr) {
  //    for (let k = 3 - 1; k > 0; k--) { // k = ランダムに選ぶ終点のインデックス
  //      const j = Math.floor(Math.random() * (k + 1));  // j = 範囲内から選ぶランダム変数
  //      [arr[j], arr[k]] = [arr[k], arr[j]]; // 分割代入 k と j を入れ替える
  //    }
  //    return arr;
  //  }

  //  quizeSet.map(shuffle);
  //  // let i;
  //  // let j;
  //  //ループさせる
  //  for(let i = 0; i < quizeSet.length; i++){
  //    let h = '<div class="container" id="container">'
  //    + '<div class="box" id="box">'
  //    + '<p class="title" id="title">'
  //    +`${i + 1}.この地名はなんて読む？`
  //    +'</p>'
  //   + `<img class="img-fluid" src="./img/${i}.png" alt="選択肢の写真">`   //変数iを埋め込む
  //   + '</div>'
  //    + '<div class="btn" id="btn">'
  //    + '<ul id="ul">';
  //    for(var g = 0; g < 3; g++){
  //      h += `<li class="list" id="${i}-${g}-1">${quizeSet[i].answers[g]}</li>`;
  //      // console.log(`document.getElementById("${i}-${j}-1")`);3

  //      // let id =  `document.getElementById("${i}-${g}-1")`
  //      // console.log(id);
  //      // let b = document.getElementById("1-0-1");
  //      // b.addEventListener 
  //    };
  //    h +=
  //    '<div id="target">'
  //    + '<p id="success"></p>'
  //    + '<p id="successText"></p>'
  //    + '</div>'
  //    + '</ul>'
  //    + '</div>'
  //    + '</div>';
  //    document.write(h);  


  //            // function click(){
  //            //   if(l === quizeSet[i].correct){
  //            //     window.alert("正解");
  //            //   }else{
  //            //     window.alert("バツ");
  //            //   }
  //            // };

  //            // const l = document.getElementById("0-0-1");
  //            // l.addEventListener("click", () => {
  //            //   click();
  //            // })
  //  };

  //  };      


  // let li1 = document.getElementById("0-0-1");
  // let li2 = document.getElementById("0-1-1");
  // let li3 = document.getElementById("0-2-1");
  // let li4 = document.getElementById("1-0-1");
  // let li5 = document.getElementById("1-1-1");
  // let li6 = document.getElementById("1-2-1");
  // let li7 = document.getElementById("2-0-1");
  // let li8 = document.getElementById("2-1-1");
  // let li9 = document.getElementById("2-2-1");
  // let li10 = document.getElementById("3-0-1");
  // let li11 = document.getElementById("3-1-1");
  // let li12 = document.getElementById("3-2-1");
  // let li13 = document.getElementById("4-0-1");
  // let li14 = document.getElementById("4-1-1");
  // let li15 = document.getElementById("4-2-1");
  // let li16 = document.getElementById("5-0-1");
  // let li17 = document.getElementById("5-1-1");
  // let li18 = document.getElementById("5-2-1");
  // let li19 = document.getElementById("6-0-1");
  // let li20 = document.getElementById("6-1-1");
  // let li21 = document.getElementById("6-2-1");
  // let li22 = document.getElementById("7-0-1");
  // let li23 = document.getElementById("7-1-1");
  // let li24 = document.getElementById("7-2-1");
  // let li25 = document.getElementById("8-0-1");
  // let li26 = document.getElementById("8-1-1");
  // let li27 = document.getElementById("8-2-1");
  // let li28 = document.getElementById("9-0-1");
  // let li29 = document.getElementById("9-1-1");
  // let li30 = document.getElementById("9-2-1");

  // //1問目
  // li1.addEventListener("click",() => {
  //   if(li1.textContent === "たかなわ"){
  //     li1.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(successNode1);
  //     success.classList.add("success");
  //     successText.appendChild(successNode2);
  //   }else if(li2.textContent === "たかなわ"){
  //     li1.classList.add("color-red")
  //     li2.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }else{
  //     li1.classList.add("color-red")
  //     li3.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }
  // });

  // li2.addEventListener("click",() => {
  //   if(li2.textContent === "たかなわ"){
  //     li2.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(successNode1);
  //     success.classList.add("success");
  //     successText.appendChild(successNode2);
  //   }else if(li1.textContent === "たかなわ"){
  //     li2.classList.add("color-red")
  //     li1.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }else{
  //     li2.classList.add("color-red")
  //     li3.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }
  // });

  // li3.addEventListener("click",() => {
  //   if(li3.textContent === "たかなわ"){
  //     li3.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(successNode1);
  //     success.classList.add("success");
  //     successText.appendChild(successNode2);
  //   }else if(li1.textContent === "たかなわ"){
  //     li3.classList.add("color-red")
  //     li1.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }else{
  //     li3.classList.add("color-red")
  //     li2.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }
  // });

  // //2問目
  // li4.addEventListener("click",() => {
  //   if(li4.textContent === "たかなわ"){
  //     li4.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(successNode1);
  //     success.classList.add("success");
  //     successText.appendChild(successNode2);
  //   }else if(li5.textContent === "たかなわ"){
  //     li4.classList.add("color-red")
  //     li5.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }else{
  //     li4.classList.add("color-red")
  //     li6.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }
  // });

  // li5.addEventListener("click",() => {
  //   if(li5.textContent === "たかなわ"){
  //     li5.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(successNode1);
  //     success.classList.add("success");
  //     successText.appendChild(successNode2);
  //   }else if(li4.textContent === "たかなわ"){
  //     li5.classList.add("color-red")
  //     li4.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }else{
  //     li5.classList.add("color-red")
  //     li6.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }
  // });

  // li6.addEventListener("click",() => {
  //   if(li6.textContent === "たかなわ"){
  //     li6.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(successNode1);
  //     success.classList.add("success");
  //     successText.appendChild(successNode2);
  //   }else if(li4.textContent === "たかなわ"){
  //     li6.classList.add("color-red")
  //     li4.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }else{
  //     li6.classList.add("color-red")
  //     li5.classList.add("color-blue")
  //     target.classList.add("target");
  //     success.appendChild(falseNode1);
  //     success.classList.add("false");
  //     successText.appendChild(falseNode2);
  //   }
  // });


  // console.log(li);





}



                // alert("ボタンがクリックされました！");
          // console.log(aaaaa);

        // let aa = ["aaa","ggg"]

        // aa.forEach(li => {

        // });

        // function output(){

        // }

                  //liを取得
                  // let lis2 = `document.getElementById("${i}-2-1")`;
                  // let lis3 = `document.getElementById("${i}-3-1")`;
                  // console.log(quizeSet[i][0]);

                  // lis1.forEach(li1 => {

                  // });


        // //定数
        // li
        // let li = document.getElementsByClassName("li");
        // console.log(lis);

        // lis.forEach(li => {
        //     if(li.textContent === "たかなわ" || li.textContent === "かめど"  || li.textContent ===  "こうじまち" || li.textContent === "ごせいもん" || li.textContent === "とどろき" || li.textContent === "せきこうい" || li.textContent === "ざっしょく" || li.textContent === "みとちょう" || li.textContent === "ろっこつ" || li.textContent === "こぐれ")
        //     {
        //       //クリックしたときの動作
        //       target.classList.add("target");
        //       success.appendChild(successNode1);
        //       success.classList.add("success");
        //       successText.appendChild(successNode2);
        //     }else{
        //       li.classList.add("color-red")
        //       target.classList.add("target");
        //       success.appendChild(falseNode1);
        //       success.classList.add("false");
        //       successText.appendChild(falseNode2);

        //     }
        //   })
        // });

        // for(var f=0;f<lis.length;f++){
        //   // console.log(lis[f].innerHTML);
        //   });

        // const li = [];
        // `let li${i} = document.getElementById("li${i}")`
        // console.log(`li${i}`);

        // li.
        // for(let q = 0; q < li.length; q++){
        //   function noClick() {
        //       li[0].classList.add("pointer-events")
        //       li[1].classList.add("pointer-events")
        //       li[2].classList.add("pointer-events")
        //   }
        //   //クリックしたときの動作
        //     li[i].addEventListener("click",() => {
        //       li[i].classList.add("color-blue")
        //       noClick();

        //       // console.log(noClick)
        //       target.classList.add("target");
        //       success.appendChild(successNode1);
        //       success.classList.add("success");
        //       successText.appendChild(successNode2);
        //     });

        // }














        // li2.addEventListener("click",() => {
        //   li2.classList.add("color-red")
        //   li1.classList.add("color-blue")
        //   noClick();


        // });

        // li3.addEventListener("click",() => {
        //   li3.classList.add("color-red")
        //   li1.classList.add("color-blue")
        //   noClick();

        //   target.classList.add("target");
        //   success.appendChild(falseNode1);
        //   success.classList.add("false");
        //   successText.appendChild(falseNode2);
        // });













      // クリックしたら.textを追加
      // target1.onclick = function(){
      //     // const div = document.getElementById('target');
      //     // div.classList.add("target");

      //     li1.classList.add("target");
      //     success.appendChild(successNode1);
      //     success.classList.add("success");
      //     successText.appendChild(successNode2);

      //   }

      //   target2.onclick = function(){
      //       const div = document.getElementById('target');
      //     div.classList.add("target");

      //     success.appendChild(falseNode1);
      //     success.classList.add("false");

      //     successText.appendChild(falseNode2);
      //   }

      //   target3.onclick = function(){
      //       const div = document.getElementById('target');
      //       div.classList.add("target");

      //       success.appendChild(falseNode1);
      //       success.classList.add("false");

      //       successText.appendChild(falseNode2);
      //     }



        // let i = 0;
        // if(li1 === quizeSet[i][0]){ // 正解処理   
        //       li1.classList.add("color-blue"); 
        //     } else {                              // 不正解処理
        //       li1.classList.add("color-red"); 
        //     }  
        //     li1.classList.add("pointer-events");
        //   }



            // 正誤判定
        //     let currentNum = 0;
        //     let isAnswered;
        //     let score = 0;

        //     function checkAnswer(li) {

        //         if(isAnswered){
        //             return;
        //   }
        //   isAnswered = true;
        //   if(li.textContent === quizeSet[i][0]){ // 正解処理   
        //     li.classList.add("color-blue"); 
        //   } else {                              // 不正解処理
        //     li.classList.add("color-red"); 
        //   }  
        //   li.classList.add("pointer-events");
        // }

        // function setQuiz() {
        //     isAnswered = false;

        //     const shuffledChoices = shuffle([...quizeSet[currentNum]]);

        //     shuffledChoices.forEach(choice => {
        //           const li1 = document.createElement("li");
        //           li.setAttribute("id", "li");
        //           const li = document.getElementById("li")

        //           li.textContent = choice;
        //         クリックしたときのイベント

        //         li.addEventListener("click" , () => {
        //                 checkAnswer(li);
        //               });
        //             ul.appendChild(li);
        //             });      
        //       }

        //       let i = 0;
        //       // 正誤判定
        //       li.addEventListener("click" , () => {
        //           if(li.textContent === quizeSet[i][0]){ // 正解処理   
        //             li.classList.add("color-blue"); 
        //           } else {                              // 不正解処理
        //             li.classList.add("color-red"); 
        //           }  
        //           li.classList.add("color-blue");
        //         });
        //         if(li.textContent === quizeSet[i][0]){ // 正解処理   
        //         } else {                              // 不正解処理
        //           li.classList.add("color-red"); 
        //         }  
        //         li.classList.add("color-blue");


        //         //クリックしたらイベント
        //         li.addEventListener("click" , () => {
        //             if(li.classList.contains("pointer-events")){
        //                 return;
        //               }
        //               li.classList.add("pointer-events");
        //             });

        //             li.onclick = function() {
        //               li.classList.add("color-blue"); 
        //             };



            // End of  "要素を繰り返す
            // htmlを修正しないで"























      // // containre
          // const container = document.createElement("div"); //div要素を作る
          // container.setAttribute("id", "container");       //#container を追加
          // container.setAttribute("class", "container");    // .containre を追加
          // //  box
          // const box = document.createElement("div");
          // box.setAttribute("id", "box");
          // box.setAttribute("class", "box");
          // // btn 
          // const btn = document.createElement("div");
          // btn.setAttribute("id", "btn");
          // btn.setAttribute("class", "btn");


          // // containre
          // document.body.appendChild(container);           // container を body に表示
          // //  box
          // container.appendChild(box);
          // // btn
          // container.appendChild(btn);
          // // title
          // // title.textContent = num[i] + ".この地名はなんと読む";
          // title.textContent ="1.この地名はなんと読む";
          // box.appendChild(title);
          // // img
          // // img.setAttribute("src", pic[i]);
          // img.setAttribute("src", pic[0]);
          // box.appendChild(img);
          // // ul
          // btn.appendChild(ul);
          // // li   三個に複製する

            // ul.appendChild(li);

            // //     li.addEventListener('click',() => {  // クリックイベントを追加
            // //   checkAnswer(li); // 正誤判定関数を実行
            // // });

          // title
          // const num = [
          //   [1],[2],[3],[4],[5],[6],[7],[8],[9],[10],
          // ]; 
          // const title = document.createElement("p");
          // title.setAttribute("id", "title");
          // title.setAttribute("class", "title");

          // img
          // const pic = [
          //   ["./img/0.png"],
          //   ["./img/1.png"],
          //   ["./img/2.png"],
          //   ["./img/3.png"],
          //   ["./img/4.png"],
          //   ["./img/5.png"],
          //   ["./img/6.png"],
          //   ["./img/7.png"],
          //   ["./img/8.png"],
          //   ["./img/9.png"],
          // ]; 
          // const img = document.createElement("img");
          // img.setAttribute("id", "img");
          // img.setAttribute("class", "img-fluid"); //レスポンシブ

          // ul
          // const ul = document.createElement("ul");
          // ul.setAttribute("id", "ul");

          // li   三個に複製する
