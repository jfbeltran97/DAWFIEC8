const express = require('express');
const app = express();

app.get("/", (req, res)=>{
    res.sendFile("html/index.html");
})

const PORT = process.env.PORT || 3000;
app.listen(PORT);