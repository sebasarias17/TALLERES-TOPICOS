app.get("/home", function (req, res) {
  res.render("home"); 
});

app.get("/show", function (req, res) {
  res.render("show");
});
