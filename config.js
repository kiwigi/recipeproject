// Web app's Firebase configuration
var app_fireBase = {};
(function(){
  var firebaseConfig = {
    apiKey: "AIzaSyD7I5Tetm1GWkITJ0viNRAB76T1OOl64cA",
    authDomain: "recipesite-bcd03.firebaseapp.com",
    databaseURL: "https://recipesite-bcd03.firebaseio.com",
    projectId: "recipesite-bcd03",
    storageBucket: "recipesite-bcd03.appspot.com",
    messagingSenderId: "694803130729",
    appId: "1:694803130729:web:9f9530464e04108c77f5f8",
    measurementId: "G-SXKRV4W79M"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
})()
