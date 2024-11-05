import './getData';
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


window.getData = async function(url, params = {}) {
    try {
        const response = await axios.get(url, { params });
        return response.data;
    } catch (error) {
        console.error('GET Error:', error);
        return null;
    }
};

// POST request function
window.postData = async function(url, data = {}) {
    try {
        const response = await axios.post(url, data);
        return response.data;
    } catch (error) {
        console.error('POST Error:', error);
        return null;
    }
};

// PUT/UPDATE request function
window.updateData = async function(url, data = {}) {
    try {
        const response = await axios.put(url, data);
        return response.data;
    } catch (error) {
        console.error('UPDATE Error:', error);
        return null;
    }
};
