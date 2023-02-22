const mongoose = require('mongoose')

const TaskSchema = new mongoose.Schema({
    title:{
    type:String,
    required:[true,'must provide a name'],
    trim:true,
    maxlength:[50,'name cannot be more than 50 characters']
    },
    completed:{
        type:Boolean,
        default:false,
    } 
})

module.exports = mongoose.model('Task', TaskSchema)