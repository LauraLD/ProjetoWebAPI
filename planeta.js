var url = "https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";


$.ajax({
  url: url,
  success: function(result){
  if("copyright" in result) {
    $("#copyright").text("Text Credits: " + result.copyright);
  }
  else {
    $("#copyright").text("Text Credits: " + "Public Domain");
  }

  $("#reqObject").text(url);
  $("#returnObject").text(JSON.stringify(result, null, 4));
  $("#apod_explaination").text(result.explanation);
  $("#apod_title").text(result.title);
}
});
