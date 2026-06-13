(function () {
  const endpoint = '/button-click-logs';

  function sendLog(action) {
    if (!action) return;

    try {
      // Use keepalive so it has a chance to run even when the page navigates
      fetch(endpoint, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          // No CSRF token here to keep it simple for GET->POST via fetch.
          // If your app requires CSRF for this route, we can add it later.
        },
        body: JSON.stringify({
          action: action,
          page: window.location.pathname,
        }),
        credentials: 'same-origin',
        keepalive: true,
      }).catch(function () {
        // ignore
      });
    } catch (e) {
      // ignore
    }
  }

  document.addEventListener('click', function (e) {
    const target = e.target && e.target.closest ? e.target.closest('[data-log-action]') : null;
    if (!target) return;

    const action = target.getAttribute('data-log-action');
    if (!action) return;

    sendLog(action);
  });
})();

