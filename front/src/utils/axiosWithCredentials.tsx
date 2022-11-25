import Axios from 'axios';

const axiosWithCredentials = Axios.create({
  baseURL: 'http://localhost:80',
  headers: { 'X-Requested-With': 'XMLHttpRequest' },
  withCredentials: true,
});

export default axiosWithCredentials;
