<?php
include 'config.php';
$data_dosen = mysqli_query($mysqli, "SELECT * FROM tbl_dosen");
$data_mk = mysqli_query($mysqli, "SELECT * FROM tbl_matakuliah");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="assets/styles/tailwind.css" />
    <title>Data Universitas</title>
</head>

<body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
            <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="../../index.html">
                    Unimal
                </a>
                <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
                    <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                        <div class="flex flex-wrap">
                            <div class="w-6/12">
                                <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="../../index.html">
                                    Data Dosen
                                </a>
                            </div>
                            <div class="w-6/12 flex justify-end">
                                <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Heading -->
                    <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                        Halaman
                    </h6>
                    <!-- Navigation -->
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                        <li class="items-center">
                            <a href="./dashboard.html" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                <i class="fas fa-tv mr-2 text-sm text-blueGray-300"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="items-center">
                            <a href="./settings.html" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                                Settings
                            </a>
                        </li>
                        <li class="items-center">
                            <a href="./tables.html" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                <i class="fas fa-table mr-2  text-sm text-blueGray-300"></i>
                                Tables
                            </a>
                        </li>

                        <li class="items-center">
                            <a href="./maps.html" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                                <i class="fas fa-map-marked mr-2 text-sm text-blueGray-300"></i>
                                Maps
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="relative md:ml-64 bg-blueGray-50">
            <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                    <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">Dashboard</a>
                </div>
            </nav>
            <!-- Header -->
            <div class="relative bg-pink-600 md:pt-32 pb-16 pt-12">
            </div>
            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                <div class="flex flex-wrap mt-4">
                    <div class="w-full mb-12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <a href="add_dosen.php" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                        <i class="fas fa-plus"></i>
                                        <!-- Tambah -->
                                    </a>
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold text-lg text-blueGray-700">
                                            Data Dosen
                                        </h3>
                                    </div>

                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto">
                                <!-- Projects table -->
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Nip
                                            </th>
                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Nama Dosen
                                            </th>
                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                No. HP
                                            </th>
                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Kode MK
                                            </th>
                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($list_dosen = mysqli_fetch_array($data_dosen)) {
                                        ?>
                                            <tr>
                                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                                    <span class="ml-3 font-bold text-blueGray-600">
                                                        <?= $list_dosen['nip_dosen']; ?>
                                                    </span>
                                                </th>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <span class="ml-3 font-bold text-blueGray-600">
                                                        <?= $list_dosen['nama_dosen']; ?>
                                                    </span>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <span class="ml-3 font-bold text-blueGray-600">
                                                        <?= $list_dosen['no_hp_dosen']; ?>
                                                    </span>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <span class="ml-3 font-bold text-blueGray-600">
                                                        <?= $list_dosen['kode_mk']; ?>
                                                    </span>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <a href="delete_dosen_act.php?nip_dosen=<?= $list_dosen['nip_dosen']; ?>" class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                                        delete
                                                    </a>
                                                    <a href="edit_dosen.php?nip_dosen=<?= $list_dosen['nip_dosen']; ?>" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                                        edit
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-pink-900 text-white">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <a href="add_mk.php" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                        <i class="fas fa-plus"></i>
                                        <!-- Tambah -->
                                    </a>
                                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold text-lg text-white">
                                            Data MK
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto">
                                <!-- Projects table -->
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                                Kode MK
                                            </th>
                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                                Nama MK
                                            </th>
                                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($list_mk = mysqli_fetch_array($data_mk)) {
                                        ?>
                                            <tr>
                                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                                    <span class="ml-3 font-bold text-white">
                                                        <?= $list_mk['kode_mk']; ?>
                                                    </span>
                                                </th>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <span class="ml-3 font-bold text-white">
                                                        <?= $list_mk['nama_mk']; ?>
                                                    </span>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <a href="delete_mk_act.php?kode_mk=<?= $list_mk['kode_mk']; ?>" class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                                        delete
                                                    </a>
                                                    <a href="edit_mk.php?kode_mk=<?= $list_mk['kode_mk']; ?>" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                                        edit
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="block py-4 ">
                    <div class="container mx-auto px-4 ">
                        <hr class="mb-4 border-b-1 border-blueGray-200 " />
                        <div class="flex flex-wrap items-center md:justify-between justify-center ">
                            <div class="w-full md:w-4/12 px-4">
                                <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">
                                    Copyright ?? <span id="get-current-year"></span>
                                    <a href="https://www.creative-tim.com?ref=njs-settings" class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                                        Creative Tim
                                    </a>
                                </div>
                            </div>
                            <div class="w-full md:w-8/12 px-4">
                                <ul class="flex flex-wrap list-none md:justify-end justify-center">
                                    <li>
                                        <a href="https://www.creative-tim.com?ref=njs-settings" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                            Creative Tim
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.creative-tim.com/presentation?ref=njs-settings" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://blog.creative-tim.com?ref=njs-settings" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-settings" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                            MIT License
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
        /* Make dynamic date appear */
        (function() {
            if (document.getElementById("get-current-year")) {
                document.getElementById(
                    "get-current-year"
                ).innerHTML = new Date().getFullYear();
            }
        })();
        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }
        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start",
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }
    </script>
</body>

</html>