const express = require('express')
const app = express()
const tasks = require('./routes/tasks')
const connectDB =require('./db/connect')
require('dotenv').config()

//middleware
app.use(express.json())

//routes
app.get('/',(req, res) => {
    res.send('TO-DO-LIST APP')
})

app.use('/api/v1/tasks', tasks)

//app.get('/api/v1/tasks')    - get all the tasks
//app.post('/api/v1/tasks')    - create new task
//app.get('/api/v1/tasks/:id')    - get single task
//app.patch('/api/v1/tasks/:id')    - update task
//app.post('/api/v1/tasks/:id')    - delete task


const port = 3000

const start = async () =>{
    try{
        await connectDB(process.env.MONGO_URI)
        app.listen(port,()=>console.log('the server is listening on port ${port}...'))

    }catch (error){
        console.log(error)
    }
}

start()

