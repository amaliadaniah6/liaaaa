<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Web - Amalia</title>

    <link rel="icon"
        href="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <header>
            <h1>
                <?php
                    echo "Personal Web";
                ?>
            </h1>

            <p>
                <?php
                    echo "Welcome to My Personal Website";
                ?>
            </p>
        </header>


        <section class="profile">

            <div class="photo">
                <img
                    src="foto.jpeg"
                    alt="Foto Profil">
            </div>


            <div class="profile-info">

                <h2>
                    <?php
                        echo "Amalia Alhamdaniyah Balqis";
                    ?>
                </h2>

                <p>
                    <?php
                        echo "102022500009";
                    ?>
                </p>

                <p>
                    <?php
                        echo "Fakultas Rekayasa Industri";
                    ?>
                </p>

                <p>
                    <?php
                        echo "Sistem Informasi";
                    ?>
                </p>

            </div>

        </section>


        <section class="social">

            <h2>
                <?php
                    echo "Social Media";
                ?>
            </h2>

            <div class="social-links">

                <a href="https://x.com/" target="_blank">
                    <?php
                        echo "X";
                    ?>
                </a>

                <a href="https://github.com/amaliadaniah6" target="_blank">
                    <?php
                        echo "Github";
                    ?>
                </a>

                <a href="https://www.instagram.com/alhmdniyhblqs_?stkn=MTlvYXN5a2VzN3Q0Zg==" target="_blank">
                    <?php
                        echo "IG";
                    ?>
                </a>

                <a href="www.linkedin.com/in/amalia-alhamdaniyah-balqis-aba6ba378" target="_blank">
                    <?php
                        echo "LinkedIn";
                    ?>
                </a>

                <a href="#" target="_blank">
                    <?php
                        echo "dll.";
                    ?>
                </a>

            </div>


            <p class="description">
                <?php
                    echo "Akun sosial media saya masing-masing. 
                    Ketika ikon sosial media diklik, akun akan 
                    menampilkan halaman baru.";
                ?>
            </p>

        </section>


        <section class="biodata">

            <h2>
                <?php
                    echo "Biodata";
                ?>
            </h2>

            <table>

                <tr>
                    <th>
                        <?php echo "Data"; ?>
                    </th>

                    <th>
                        <?php echo "Keterangan"; ?>
                    </th>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td>
                        <?php
                            echo "Amalia Alhamdaniyah Balqis";
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td>
                        <?php
                            echo "102022500009";
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>Fakultas</td>
                    <td>
                        <?php
                            echo "Fakultas Rekayasa Industri";
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>Program Studi</td>
                    <td>
                        <?php
                            echo "Sistem Informasi";
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td>
                        <?php
                            echo "SI4908";
                        ?>
                    </td>
                </tr>

            </table>

        </section>

        <footer>

            <p>
                <?php
                    echo "© 2026 Personal Web - Amalia";
                ?>
            </p>

        </footer>

    </div>

</body>

</html>