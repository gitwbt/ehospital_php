const cacheName = "v2";
self.addEventListener("install", (e) => {
  console.log("Install");
  e.waitUntil(
    caches
      .open(`static${cacheName}`)
      .then((cache) => {
        return cache.addAll([
          "./index.php",
          "./assets/css/main.css",
          "./assets/css/bootstrap/bootstrap.css",
          "./assets/js/main.js",
          "./assets/js/swiper-bundle.min.js",
          "./assets/img/",
          "./assets",
          "./",
        ]);
      })
      .then(() => self.skipWaiting())
  );
});

self.addEventListener("fetch", (e) => {
  console.log("fetch");
  e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));
});

self.addEventListener("activate", (e) => {
  e.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cache) => {
          if (cache !== `static${cacheName}`) {
            console.log("Remove Cache");
            return caches.delete(cache);
          }
        })
      );
    })
  );
});
