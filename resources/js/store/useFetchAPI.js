import { defineStore } from "pinia";
import axios from "axios";

export const useFetchAPIStore = defineStore('api-connection', () => {

    const useFetchAPI = (route, payload, action) => {
        const apiEndpoint = 'http://localhost:8000/api';

        const promise = new Promise((resolve, reject) => {
            switch (action) {
                case 'GET':
                    axios.get(`${apiEndpoint}/${route}`, { params: payload }).then((response) => {
                        return resolve(response.data)
                    }).catch((error) => {
                        reject(error);
                    });

                    break
                case 'SHOW':
                    axios.get(`${apiEndpoint}/${route}/${payload}`).then((response) => {
                        return resolve(response.data)
                    }).catch((error) => {
                        reject(error);
                    });
            }
        })

        return promise
    }

    return {
        useFetchAPI
    }

})
