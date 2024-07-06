<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "CaffeineCanvas";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="CREATE TABLE Feedback (
    FeedbackID INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(50),
    PhoneNumber VARCHAR(11),
    LocationVisited VARCHAR(50),
    DineIn INT,
    DineOut INT,
    DayVisited DATE,
    FoodQuality INT,
    OverallServiceQuality INT,
    Cleanliness INT,
    OrderAccuracy INT,
    SpeedOfService INT,
    OverallExperience INT,
    Comments VARCHAR(100),
    CONSTRAINT fk_Email FOREIGN KEY (Email) REFERENCES Customer(email)
)";
if (mysqli_query($conn, $sql)) {
    echo "Table Feedback created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

<?php
$servername="localhost";
$username="root";
$password="";
$db="CaffeineCanvas";

$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}
$sql="create table Reservation (
    id INT AUTO_INCREMENT PRIMARY KEY , 
    CustomerName varchar(50),
    email varchar (50),
    phone varchar(11),
    message varchar(100),
    Email_Customer varchar(50),
    constraint fk_Email_Customer foreign key (Email_Customer) references Customer (email))";

if(mysqli_query($conn,$sql))
{
    echo "Table Reservation created successfully";
}
else
{
    echo "Error creating table: ".$conn->error;
}
$close=$conn->close();
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="CaffeineCanvas";

$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}
$sql="CREATE TABLE Products (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(50),
    price DECIMAL(10,2),
    Id_Director INT,
    CONSTRAINT fk_Id_Director FOREIGN KEY (Id_Director) REFERENCES Director(id)
)";
if(mysqli_query($conn,$sql))
{
    echo "Table Products created successfully";
}
else
{
    echo "Error creating table: ".$conn->error;
}
$close=$conn->close();
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="CaffeineCanvas";

$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}
$sql="create table Director (
    id INT AUTO_INCREMENT PRIMARY KEY , 
    name varchar(50),
    phone varchar(11),
    address varchar(100))";

if(mysqli_query($conn,$sql))
{
    echo "Table Director created successfully";
}
else
{
    echo "Error creating table: ".$conn->error;
}
$close=$conn->close();
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="CaffeineCanvas";

$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
}
$sql="CREATE TABLE Orders (
    Order_ID INT AUTO_INCREMENT PRIMARY KEY,
    TotalPrice DECIMAL(10,2),
    OrderDate DATETIME,
    Id_Barista INT,
    CONSTRAINT fk_Id_Barista FOREIGN KEY (Id_Barista) REFERENCES Barista(Id)
)";

if(mysqli_query($conn,$sql))
{
    echo "Table order created successfully";
}
else
{
    echo "Error creating table order: ".$conn->error;
}
$close=$conn->close();
?>










