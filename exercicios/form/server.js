const express = require('express')
const bodyParser = require('body-parser')

const app = express()

app.use(bodyParser.urlencoded({extendeded: true}))

app.post('/usuarios',(req,resp) =>{
    console.log(req.body)
    resp.send('Parabéns!')

  
})  

app.listen(3003)