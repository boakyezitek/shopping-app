import { defineStore } from "pinia";
import axios from "axios";

/**
 * The fetch API store instance, which manages the state of the API requests.
 */
export const useFetchAPIStore = defineStore('api-connection', () => {

    /**
     * Fetches data from a remote API and returns a promise.
     *
     * @param {string} route - The API route to fetch data from.
     * @param {Object} payload - The data to send to the API.
     * @param {string} action - The HTTP method to use (GET or SHOW).
     */
    const useFetchAPI = (route, payload, action) => {
        const apiEndpoint = 'http://localhost:8000/api';

        /**
         * Returns a promise that resolves with the data fetched from the remote API.
         */
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

    /**
     * Returns the `useFetchAPI` method.
     */
    return {
        useFetchAPI
    }

})
