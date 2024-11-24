document.addEventListener('DOMContentLoaded', function () {
    const urlForm = document.getElementById('urlForm');
    const urlInput = document.getElementById('urlInput');
    const scanResult = document.getElementById('scanResult');
    const historyTable = document.getElementById('historyTable');
  
    // Mock function to simulate URL checking
    function checkURL(url) {
      // Simulate a phishing check (for demonstration)
      const phishingUrls = ['phishing.com', 'malicious.net'];
      return phishingUrls.includes(url) ? 'Phishing' : 'Safe';
    }
  
    // Handle form submission
    urlForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const url = urlInput.value.trim();
      if (url) {
        const status = checkURL(url);
        // Display result
        scanResult.classList.remove('d-none', 'alert-success', 'alert-danger');
        if (status === 'Safe') {
          scanResult.classList.add('alert-success');
          scanResult.textContent = 'The URL is safe to visit.';
        } else {
          scanResult.classList.add('alert-danger');
          scanResult.textContent = 'Warning: The URL is potentially malicious.';
        }
        // Add to history
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${url}</td>
          <td>${status}</td>
          <td>${new Date().toLocaleString()}</td>
        `;
        historyTable.prepend(row);
        // Clear input
        urlInput.value = '';
      }
    });
  });
  