<head>
    <title>SpaceX Stats Live</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base target="_blank">
    <link rel="stylesheet" type="text/css" href="/css/styles.css" />

    <!-- 1. Load libraries -->
    <!-- Polyfill(s) for older browsers -->
    <script src="node_modules/es6-shim/es6-shim.min.js"></script>

    <script src="node_modules/zone.js/dist/zone.js"></script>
    <script src="node_modules/reflect-metadata/Reflect.js"></script>
    <script src="node_modules/systemjs/dist/system.src.js"></script>

    <!-- 2. Configure SystemJS -->
    <script src="js/systemjs.config.js"></script>
    <script>
        System.config({
           defaultJSExtensions: true
        });
        System.import('js/angular2/main').catch(function(err){ console.error(err);  });
    </script>
</head>

<body class="live">
    <live>Loading...</live>
</body>