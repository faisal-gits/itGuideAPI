const apiKey = 'Your_API_Key';
const domainToCheck = 'newdomain.com';

const type = 'check'; // Use 'check' for new domain search

const baseUrl = 'https://selfcare.itguidebd.com/public_api/whois';
const endpoint = `?type=${type}&apiKey=${apiKey}&domain=${domainToCheck}`;

const apiUrl = baseUrl + endpoint;

fetch(apiUrl)
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    // Handle the successful response
    console.log(data);
  })
  .catch(error => {
    // Handle errors
    console.error('Error:', error.message);
  });
