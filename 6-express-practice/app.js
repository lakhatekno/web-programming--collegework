
// // const express = require('express')
// import { printname } from './mhs';
// const mhs = require('./mhs');

// console.log(mhs.kuadrat(7)*mhs.PI);


// const app = express()
// const port = 3000

// app.get('/', (req, res) => {
//    res.send('Hello World!')
// })

// app.listen(port, () => {
//    console.log(`Example app listening at http://localhost:${port}`)
// })

const fs = require('fs');

fs.writeFile('mhs.txt', "farel tamvan", (err) => {
   console.log(err);
})