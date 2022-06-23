<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
	table [data-hidden] {
  display: none; }

table tr td:last-of-type {
  /* background-color: white */
  /* border-color: white */
  margin-left: 25px; }

.row.roomy {
  margin: 10px auto 25px; }

</style>
<body>

<div class="col-md-2"></div>
<header class="col-md-8 text-center">
  <h1>Bootstrap Table Build</h1>
</header>
<div class="col-md-2"></div>
<div class="container">
  <div class="row">
    <table class="table table-hover table-striped">
      <tr>
        <th>Name</th>
        <th>Hometown</th>
        <th>Degree</th>
        <th>Employed</th>
        <th>Company</th>
      </tr>
      <tr data-hidden="true"></tr>
      <tr data-input="true"></tr>
    </table>
  </div>
  <div class="row roomy">
    <div class="col-md-5"></div>
    <button class="col-md-2 btn btn-primary btn-lg" data-save="true">SAVE</button>
    <div class="col-md-5"></div>
  </div>
  <div class="row roomy">
    <div class="col-md-4"></div>
    <button class="col-md-4 btn btn-success btn-lg" data-json="true">JSON</button>
    <div class="col-md-4"></div>
  </div>
</div>
<template id="valrow">
  <td>null</td>
  <td>null</td>
  <td>null</td>
  <td>null</td>
  <td>null</td>
</template>
<template id="inputrow">
  <td class="ce"><span class="placeholder">text</span></td>
  <td class="ce"><span class="placeholder">text</span></td>
  <td class="ce"><span class="placeholder">text</span></td>
  <td class="ce"><span class="placeholder">text</span></td>
  <td class="ce"><span class="placeholder">text</span></td>
</template>
</body>
<script>
	"use strict";

// bootstrap
var inputRow = document.querySelector("#inputrow").cloneNode(true);
var valRow = document.querySelector("#valrow").cloneNode(true);
$("[data-input]").append(inputRow.innerHTML);
$("[data-hidden]").append(valRow.innerHTML);

function setContentEditable() {
  $('tr[data-input="true"] > td.ce').attr("contenteditable", "true");
  $("td.ce span.placeholder").attr("contenteditable", "false");
  return;
} // Set appended row editable

setContentEditable(); // Bind each content cell to (hidden) cell

$("[data-input] td").each(function (i, el) {
  var ph = $(".placeholder")[i];
  $(el).on("input", function (e) {
    console.log(ph, i);

    var bindText = (text) => {
      let cell = $("[data-hidden] td")[i];
      $(cell).text(text);
    };

    $(ph).detach();
    bindText(e.target.innerText);
  });
  $(el).on("blur", function (e) {
    if ($(el).text() === "") {
      $(el).text("text");
    }
  });
}); // Add new row

$("button[data-save]").on("click", function (e) {
  $("[data-hidden] td").each(function (i, el) {
    if ($(el).text() === "") {
      $(el).text("null");
    }
  });
  $("[data-hidden]").removeAttr("data-hidden");
  $("[data-input]").html("");
  var html = $("#inputrow").html();
  $("[data-input]").html(html);
  $("<tr data-hidden></tr>")
    .insertBefore("[data-input]")
    .append(valRow.innerHTML);
  setContentEditable();
});

</script>
</html>