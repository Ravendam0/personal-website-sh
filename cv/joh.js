
    // Small convenience: let users download the filled HTML
    document.getElementById('downloadBtn').addEventListener('click', function () {
      const doc = '<!doctype html>\n' + document.documentElement.outerHTML;
      const blob = new Blob([doc], { type: 'text/html' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url; a.download = (document.getElementById('name').textContent || 'cv') + '.html';
      document.body.appendChild(a); a.click(); a.remove();
      URL.revokeObjectURL(url);
    });

    // Replace placeholders example (optional)
    (function fillDefaults() {
      const nameEl = document.getElementById('name');
      if (nameEl.textContent.includes('[Your')) {
        nameEl.textContent = 'HARRISON JUMA';
      }
      const initials = (nameEl.textContent.split(' ').map(s => s[0] || '').slice(0, 2).join('') || 'YT').toUpperCase();
      document.querySelector('.avatar').textContent = initials;
      document.getElementById('updated').textContent = new Date().toLocaleString('en-GB', { month: 'short', year: 'numeric' });
    })();