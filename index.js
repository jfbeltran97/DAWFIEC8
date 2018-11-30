const express = require('express');
const path = require('path');
const app = express();
app.use(express.static(path.join(__dirname, 'public')));
app.use('/css',  express.static(__dirname + '/css'));
app.use('/js',  express.static(__dirname + '/js'));
app.use('/img',  express.static(__dirname + '/img'));
app.use('/data',  express.static(__dirname + '/data'));
app.use('/html',  express.static(__dirname + '/html'));

app.get("/", (req, res)=>{
    res.sendFile(path.join(__dirname+"/html/index.html"));
});

app.get("/somos.html", (req, res)=>{
    res.sendFile(path.join(__dirname+"/html/somos.html"));
});

app.get("/calinauplio.html", (req, res)=>{
    res.sendFile(path.join(__dirname+"/html/calinauplio.html"));
});

app.get("/aquaindesa.html", (req, res)=>{
    res.sendFile(path.join(__dirname+"/html/aquaindesa.html"));
});
app.get("/crisanticlub.html", (req, res)=>{
    res.sendFile(path.join(__dirname+"/html/crisanticlub.html"));
});

app.get("/testnoticias.html", (req, res)=>{
    res.sendFile(path.join(__dirname+"/html/testnoticias.html"));
});

app.get("/contacto-cali.html", (req, res)=>{
    res.sendFile(path.join(__dirname+"/html/contacto-cali.html"));
});
app.get("/index.html", (req, res)=>{
    res.sendFile(path.join(__dirname+"/html/index.html"));
});

const PORT = process.env.PORT || 3002;
app.listen(PORT);