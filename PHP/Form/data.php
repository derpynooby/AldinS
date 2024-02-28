<?php
require_once("../../Dashboard/header.php");
require_once("../../Dashboard/sidebar.php");
require_once("../../Dashboard/repeated-content.php");

?>
<!-- row -->
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
    <div class="card overflow-hidden">
        <div class="card-body pb-3">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-10">definition &amp; use</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-1 mb-3">CRUD adalah singkatan dari Create, Read, Update, dan Delete. CRUD adalah serangkaian operasi dasar yang sering dilakukan pada sebuah data, yaitu:</p>
            <p class="tx-1 mb-3">Create (Membuat): Menambahkan data baru.</p>
            <p class="tx-1 mb-3">Read (Membaca): Mengambil data dari sistem.</p>
            <p class="tx-1 mb-3">Update (Mengubah): Merubah data yang sudah ada.</p>
            <p class="tx-1 mb-3">Delete (Menghapus): Menghilangkan data dari sistem.</p>
            <p class="tx-1 mb-3">CRUD sering digunakan dalam pengembangan aplikasi web atau mobile untuk mengelola data.</p>
            <p class="tx-1 mb-3">Implementasi CRUD sering menggunakan bahasa pemrograman seperti PHP, Python, atau Java, serta framework atau tools seperti Laravel, Django, atau Hibernate.</p>
        </div>
    </div>
    <div class="card overflow-hidden">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-10">result</h4>
                <i class="mdi mdi-dots-horizontal"></i>
            </div>
            <div class='rounded-10 card-body ' style="min-height: 100px;">
                <?php
                // Koneksi ke database
                // menjadikan variable $conn sebagai wadah untuk perintah koneksi ke database
                $conn = mysqli_connect('localhost', 'root', '', 'test');


                // mendefinisikan variabel untuk wadah dari data yang di input
                $username = ["username"];
                $password = ["password"];
                $class = ["class"];
                $age = ["age"];



                // Input ke database

                // fungsi input data ke database
                // jika element dengan nama submit ditekan
                if (isset($_POST["submit"])) {
                    // mendefinisikan $submit sebagai value yang dikirim dari tombol submit
                    $submit = htmlspecialchars($_POST["submit"]);

                    $submit = (int) $submit;
                    if ($submit == 0) {


                        // htmlspecialchars() adalah fungsi untuk mengubah karakter khusus
                        //$_POST["username"] mengambil data dari name="username" pada form
                        $username = htmlspecialchars($_POST["username"]);
                        $password = htmlspecialchars($_POST["password"]);
                        $class = htmlspecialchars($_POST["class"]);
                        $age = htmlspecialchars($_POST["age"]);

                        // password_hash() adalah fungsi untuk membuat password terenkripsi
                        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                        // query untuk memasukkan data ke database
                        $query = "INSERT INTO data VALUES('', '$username', '$class', '$age', '$hashedPassword')";

                        if (mysqli_query($conn, $query)) {
                            // jika input berhasil
                            echo "Data submitted succesfully";
                        } else {
                            echo "Something wrong when submitting data";
                        }
                    } else {





                        // Update

                        // mengambil data dari element
                        $id = htmlspecialchars($_POST['submit']);
                        $username = htmlspecialchars($_POST['username']);
                        $class = htmlspecialchars($_POST['class']);
                        $age = htmlspecialchars($_POST['age']);
                        $password = htmlspecialchars($_POST['password']);

                        // enskripsi password
                        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                        // perintah untuk update dengan key id
                        $query = "UPDATE data SET Name='$username', Class='$class', Age='$age', Password='$hashedPassword' WHERE id=$id";

                        if (mysqli_query($conn, $query)) {
                            // jika update berhasil
                            echo "Record updated successfully";
                        } else {
                            // jika update gagal
                            echo "Error updating record: " . mysqli_error($conn);
                        }
                    }
                };


                // Delete

                // cek value tombol delete ketika ditekan
                if (isset($_POST['delete'])) {
                    // mendefinisikan $id sebagai value yang dikirim dari tombol delete
                    $id = htmlspecialchars($_POST['delete']);

                    // perintah untuk delete dengan key id
                    $query = "DELETE FROM data WHERE id=$id";

                    if (mysqli_query($conn, $query)) {
                        // jika delete berhasil 
                        echo "Record deleted successfully";
                    } else {
                        // jika delete gagal
                        echo "Error deleting record: " . mysqli_error($conn);
                    }
                }


                // Read data dari database

                $query = "SELECT * FROM data;";

                // Mengambil data dari database
                $result = $conn->query($query);

                // Mengecek jika ada data
                if ($result->num_rows > 0) {

                    // Menjadikan data sebagai array
                    $row = $result->fetch_assoc();
                } else {
                    echo "0 results";
                }

                $conn->close();
                ?>
                <!-- Memasukkan data kedalam table -->
                <table class='table'>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Age</th>
                        <th class="text-center" colspan="2" scope="col">Action</th>
                    </tr>
                    <!-- Looping data -->
                    <?php while ($data = $result->fetch_assoc()) : ?>
                        <tr>
                            <th><?php echo $data["id"] ?></th>
                            <td><?php echo $data["Name"] ?></td>
                            <td><?php echo $data["Class"] ?></td>
                            <td><?php echo $data["Age"] ?></td>

                            <!-- Edit dan delete button -->
                            <td class="text-center">
                                <form action="register.php" method="post">
                                    <button name="update" value="<?php echo $data["id"] ?>">Edit</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="" method="post">
                                    <button name="delete" value="<?php echo $data["id"] ?>">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    <tr>
                        <!-- Add button -->
                        <td class="text-center" colspan="6">
                            <form action="register.php" method="post">
                                <button>Add data</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php
require_once("../../Dashboard/footer.php");
?>