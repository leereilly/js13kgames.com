var config = {
  db: {
    name: 'main',
    connection: {
      dialect: 'sqlite',
      storage: 'production.sqlite'
    }
  },
  app: {
    //domain: 'http://js13kgames.com'
    domain: 'http://localhost:3000'
  },
  games: {
    editionId: 5,
    serverCategoryId: 10,
    maxSize: 13312 // 13kb
  },
  images: {
    maxSize: 102400 // 100kb
  },
  admin: {
    minLevel: 10
  }
};

module.exports = config;
