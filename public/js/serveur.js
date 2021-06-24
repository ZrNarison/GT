function dbConnect(){
    var mysqli = required('mysql');
    var connection=mysql.createConnection({
        host:"localhost",
        user:"root",
        password:"",
        database:"mybase"
    });
    connection.connect()
    return connection
};
function InsertUser(){
    // var db = dbConnect()
    var A = document.getElementById('nom').value.toUpperCase()
    var B = document.getElementById('prenom').value
    var C = document.getElementById('date_naissance').value
    var D = document.getElementById('lieu_naissance').value.toUpperCase()
    var data=[A,B,C,D]
    alert(data)   
    // console.log( dbConnect()) 
    // db.query("INSERT INTO user SET name=?,username=?,dt=?,lieu=?",data,(err,user,field)=>{
        // if(err)throw err
    // })
}