const CACHE_NAME = 'savadub-cache-v4';
const OFFLINE_URL = new URL('./offline.html', self.registration.scope).toString();
const PRECACHE_URLS = [
  new URL('./', self.registration.scope).toString(),
  OFFLINE_URL,
  new URL('./manifest.json', self.registration.scope).toString(),
  new URL('./assets/css/main.css', self.registration.scope).toString(),
  new URL('./assets/js/main.js', self.registration.scope).toString(),
  new URL('./assets/images/icons/favicon.png', self.registration.scope).toString(),
  new URL('./assets/images/icons/icon-192x192.png', self.registration.scope).toString(),
  new URL('./assets/images/icons/icon-512x512.png', self.registration.scope).toString()
];

self.addEventListener('install', (event) => {
  event.waitUntil((async () => {
    const cache = await caches.open(CACHE_NAME);
    await cache.addAll(PRECACHE_URLS);
    await self.skipWaiting();
  })());
});

self.addEventListener('activate', (event) => {
  event.waitUntil((async () => {
    const cacheNames = await caches.keys();
    await Promise.all(
      cacheNames
        .filter((cacheName) => cacheName !== CACHE_NAME)
        .map((cacheName) => caches.delete(cacheName))
    );
    await self.clients.claim();
  })());
});

self.addEventListener('fetch', (event) => {
  if (event.request.method !== 'GET') {
    return;
  }

  const requestUrl = new URL(event.request.url);
  const sameOrigin = requestUrl.origin === self.location.origin;

  if (event.request.mode === 'navigate') {
    event.respondWith((async () => {
      try {
        const networkResponse = await fetch(event.request);
        const cache = await caches.open(CACHE_NAME);
        cache.put(event.request, networkResponse.clone());
        return networkResponse;
      } catch (error) {
        const cachedResponse = await caches.match(event.request);
        return cachedResponse || caches.match(OFFLINE_URL);
      }
    })());
    return;
  }

  if (!sameOrigin) {
    return;
  }

  event.respondWith((async () => {
    const cachedResponse = await caches.match(event.request);
    if (cachedResponse) {
      return cachedResponse;
    }

    try {
      const networkResponse = await fetch(event.request);

      if (networkResponse.ok) {
        const cache = await caches.open(CACHE_NAME);
        cache.put(event.request, networkResponse.clone());
      }

      return networkResponse;
    } catch (error) {
      return new Response('', {
        status: 504,
        statusText: 'Offline'
      });
    }
  })());
});
