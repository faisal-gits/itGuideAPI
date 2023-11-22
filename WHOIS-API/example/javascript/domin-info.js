const apiKey = 'Your_API_Key';
const existingDomain = 'existingdomain.com';

const type = 'query'; // Use 'query' for domain information

const baseUrl = 'https://selfcare.itguidebd.com/public_api/whois';
const endpoint = `?type=${type}&apiKey=${apiKey}&domain=${existingDomain}`;

const apiUrl = baseUrl + endpoint;

fetch(apiUrl)
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    // Handle the successful response for domain information query
    console.log(data);
  })
  .catch(error => {
    // Handle errors
    console.error('Error:', error.message);
  });
