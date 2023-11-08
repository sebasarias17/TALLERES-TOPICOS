app.get("/home", function (req, res) {
  res.render("home"); 
});

app.get("/neasJson", function (req, res) {
  res.render("neasJson");
});
