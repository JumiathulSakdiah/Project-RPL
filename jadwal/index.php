<!DOCTYPE html>
<html lang="en" class="text-xs">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <script src="..\script.js"></script>
    <title>Jadwal - Daring Reminder</title>
</head>
<body class="text-white relative overflow-hidden">
    <div id="app" class=" filter   flex flex-row h-screen transition duration-500 ease-in-out">
        <!-- NAV BAR -->
        <div class="flex flex-col flex-none bg-gray-normal justify-between pb-8 pt-60">
            <div class="flex flex-col flex-none px-4 space-y-4">
                <a class="nav" href="../home/index.php">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.87" d="M8.17723 1.37812C8.42805 1.1353 8.76012 1 9.10529 1C9.45045 1 9.78253 1.1353 10.0333 1.37812L16.577 7.71226C16.9823 8.10373 17.2106 8.65013 17.2106 9.22005V16.925C17.2106 17.4754 16.9971 18.0031 16.6171 18.3923C16.2371 18.7814 15.7217 19 15.1843 19H12.4825C12.2163 19 11.9527 18.9463 11.7067 18.8419C11.4608 18.7376 11.2374 18.5846 11.0492 18.3918C10.861 18.1989 10.7118 17.97 10.61 17.7181C10.5083 17.4662 10.456 17.1963 10.4562 16.9237V13.4654C10.4562 13.282 10.385 13.106 10.2583 12.9763C10.1317 12.8466 9.95987 12.7738 9.78073 12.7738H8.42985C8.25071 12.7738 8.07891 12.8466 7.95224 12.9763C7.82557 13.106 7.75441 13.282 7.75441 13.4654V16.9237C7.75441 17.474 7.54092 18.0017 7.16091 18.3909C6.7809 18.78 6.2655 18.9986 5.72808 18.9986H3.02632C2.48891 18.9986 1.97351 18.78 1.5935 18.3909C1.21349 18.0017 1 17.474 1 16.9237V9.21867C1 8.64875 1.22965 8.10235 1.63491 7.71087L8.17723 1.37535V1.37812ZM9.10529 2.38239L2.56162 8.71792C2.49519 8.7824 2.44225 8.86005 2.40603 8.94613C2.3698 9.03221 2.35104 9.12494 2.35088 9.21867V16.9237C2.35088 17.1071 2.42204 17.283 2.54871 17.4127C2.67538 17.5424 2.84718 17.6153 3.02632 17.6153H5.72808C5.90722 17.6153 6.07902 17.5424 6.20569 17.4127C6.33236 17.283 6.40352 17.1071 6.40352 16.9237V13.4654C6.40352 12.9151 6.61701 12.3873 6.99702 11.9982C7.37703 11.6091 7.89243 11.3905 8.42985 11.3905H9.78073C10.3181 11.3905 10.8335 11.6091 11.2136 11.9982C11.5936 12.3873 11.807 12.9151 11.807 13.4654V16.9237C11.807 17.1071 11.8782 17.283 12.0049 17.4127C12.1316 17.5424 12.3034 17.6153 12.4825 17.6153H15.1843C15.3634 17.6153 15.5352 17.5424 15.6619 17.4127C15.7885 17.283 15.8597 17.1071 15.8597 16.9237V9.21867C15.8597 9.1247 15.841 9.03172 15.8048 8.94538C15.7686 8.85905 15.7156 8.78118 15.649 8.71653L9.10529 2.38239Z" fill="white" stroke="white" stroke-linejoin="round"/>
                    </svg>
                    <p class="font-extrabold text-lg -mb-1">Home</p>
                <a class="nav" href="../agenda/index.php">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.231 6.5C10.0519 6.5 9.88008 6.57902 9.75341 6.71967C9.62674 6.86032 9.55558 7.05109 9.55558 7.25C9.55558 7.44891 9.62674 7.63968 9.75341 7.78033C9.88008 7.92098 10.0519 8 10.231 8H13.3831C13.5622 8 13.734 7.92098 13.8607 7.78033C13.9874 7.63968 14.0585 7.44891 14.0585 7.25C14.0585 7.05109 13.9874 6.86032 13.8607 6.71967C13.734 6.57902 13.5622 6.5 13.3831 6.5H10.231ZM9.55558 12.75C9.55558 12.5511 9.62674 12.3603 9.75341 12.2197C9.88008 12.079 10.0519 12 10.231 12H13.3831C13.5622 12 13.734 12.079 13.8607 12.2197C13.9874 12.3603 14.0585 12.5511 14.0585 12.75C14.0585 12.9489 13.9874 13.1397 13.8607 13.2803C13.734 13.421 13.5622 13.5 13.3831 13.5H10.231C10.0519 13.5 9.88008 13.421 9.75341 13.2803C9.62674 13.1397 9.55558 12.9489 9.55558 12.75ZM8.00657 5.72C8.13306 5.86063 8.20411 6.05125 8.20411 6.25C8.20411 6.44875 8.13306 6.63937 8.00657 6.78L6.2054 8.78C6.07875 8.92045 5.90708 8.99934 5.72808 8.99934C5.54909 8.99934 5.37742 8.92045 5.25077 8.78L4.35019 7.78C4.23088 7.63782 4.16592 7.44978 4.16901 7.25548C4.1721 7.06118 4.24298 6.87579 4.36674 6.73838C4.49049 6.60097 4.65744 6.52225 4.83243 6.51882C5.00741 6.5154 5.17677 6.58752 5.30481 6.72L5.72808 7.19L7.05195 5.72C7.17859 5.57955 7.35027 5.50066 7.52926 5.50066C7.70825 5.50066 7.87993 5.57955 8.00657 5.72ZM8.00657 12.28C8.07293 12.2113 8.12616 12.1285 8.16308 12.0365C8.19999 11.9445 8.21984 11.8452 8.22144 11.7445C8.22304 11.6438 8.20636 11.5438 8.17239 11.4504C8.13842 11.357 8.08785 11.2722 8.02372 11.201C7.95958 11.1297 7.88318 11.0736 7.79907 11.0359C7.71497 10.9982 7.62488 10.9796 7.53419 10.9814C7.4435 10.9832 7.35406 11.0052 7.27121 11.0462C7.18835 11.0872 7.11378 11.1463 7.05195 11.22L5.72808 12.69L5.30481 12.22C5.17677 12.0875 5.00741 12.0154 4.83243 12.0188C4.65744 12.0223 4.49049 12.101 4.36674 12.2384C4.24298 12.3758 4.1721 12.5612 4.16901 12.7555C4.16592 12.9498 4.23088 13.1378 4.35019 13.28L5.25077 14.28C5.37742 14.4205 5.54909 14.4993 5.72808 14.4993C5.90708 14.4993 6.07875 14.4205 6.2054 14.28L8.00657 12.28ZM3.02632 1C2.48891 1 1.9735 1.23705 1.5935 1.65901C1.21349 2.08097 1 2.65326 1 3.25V16.75C1 17.3467 1.21349 17.919 1.5935 18.341C1.9735 18.7629 2.48891 19 3.02632 19H15.1843C15.7217 19 16.2371 18.7629 16.6171 18.341C16.9971 17.919 17.2106 17.3467 17.2106 16.75V3.25C17.2106 2.65326 16.9971 2.08097 16.6171 1.65901C16.2371 1.23705 15.7217 1 15.1843 1H3.02632ZM2.35088 3.25C2.35088 3.05109 2.42204 2.86032 2.54871 2.71967C2.67538 2.57902 2.84718 2.5 3.02632 2.5H15.1843C15.3634 2.5 15.5352 2.57902 15.6619 2.71967C15.7885 2.86032 15.8597 3.05109 15.8597 3.25V16.75C15.8597 16.9489 15.7885 17.1397 15.6619 17.2803C15.5352 17.421 15.3634 17.5 15.1843 17.5H3.02632C2.84718 17.5 2.67538 17.421 2.54871 17.2803C2.42204 17.1397 2.35088 16.9489 2.35088 16.75V3.25Z" fill="white" stroke="white" stroke-width="0.75"/>
                        </svg>
                    <p class="font-extrabold text-lg -mb-1">Agenda</p>
                </a>
                <a class="nav" href="../catatan/index.php">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.87" d="M16.1974 1H4.03948C3.23336 1 2.46026 1.31607 1.89024 1.87868C1.32023 2.44129 1 3.20435 1 4V16C1 16.7956 1.32023 17.5587 1.89024 18.1213C2.46026 18.6839 3.23336 19 4.03948 19H16.1974C16.4661 19 16.7238 18.8946 16.9138 18.7071C17.1038 18.5196 17.2106 18.2652 17.2106 18V2C17.2106 1.73478 17.1038 1.48043 16.9138 1.29289C16.7238 1.10536 16.4661 1 16.1974 1V1ZM4.03948 3H15.1843V13H4.03948C3.69385 13.0027 3.35122 13.0636 3.02632 13.18V4C3.02632 3.73478 3.13307 3.48043 3.32307 3.29289C3.51307 3.10536 3.77078 3 4.03948 3V3ZM4.03948 17C3.77078 17 3.51307 16.8946 3.32307 16.7071C3.13307 16.5196 3.02632 16.2652 3.02632 16C3.02632 15.7348 3.13307 15.4804 3.32307 15.2929C3.51307 15.1054 3.77078 15 4.03948 15H15.1843V17H4.03948Z" fill="white" stroke="white" stroke-width="0.5"/>
                        </svg>
                        
                    <p class="font-extrabold text-lg -mb-1">Catatan</p>
                </a>
                <a class="nav-active" href="#">
                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9685 3.79996H5.24212C3.45155 3.79996 2 5.41173 2 7.39996V16.4C2 18.3882 3.45155 20 5.24212 20H14.9685C16.7591 20 18.2106 18.3882 18.2106 16.4V7.39996C18.2106 5.41173 16.7591 3.79996 14.9685 3.79996Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.86328 2V5.60001" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.3477 2V5.60001" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 9.20004H18.2106" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                    <p class="font-extrabold text-lg -mb-1">Jadwal</p>
                </a>
                
            </div>
            <a class="nav mx-4">
                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0059 15.5V16.625C11.0059 17.5201 10.7212 18.3786 10.2145 19.0115C9.70787 19.6444 9.02066 20 8.30411 20H4.70176C3.98521 20 3.29801 19.6444 2.79133 19.0115C2.28465 18.3786 2 17.5201 2 16.625V5.375C2 4.47989 2.28465 3.62145 2.79133 2.98851C3.29801 2.35558 3.98521 2 4.70176 2H8.30411C9.02066 2 9.70787 2.35558 10.2145 2.98851C10.7212 3.62145 11.0059 4.47989 11.0059 5.375V6.5M14.6082 15.5L18.2106 11L14.6082 15.5ZM18.2106 11L14.6082 6.5L18.2106 11ZM18.2106 11H5.60235H18.2106Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    
                    
                <p class="font-extrabold text-lg -mb-1">Sign out</p>
            </a>
        </div>
        
        <!-- KONTEN -->
        <div class="flex flex-auto flex-col overflow-hidden">
            <div class="flex row p-4 bg-gray-normal items-center justify-between z-50">
                <!-- <div class="flex flex-row space-x-2 ">
                    <input class="ring-opacity-0 outline-none border-none w-96 p-2 pl-5 rounded-lg bg-gray-dark font-semibold placeholder-white placeholder-opacity-40 placeholder-italic" type="text" placeholder="Cari tugas, ujian, reminder, atau subjek disini...">
                    <button class="bg-gray-light p-2 px-6 rounded-lg outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="opacity-60 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
                <a href="#" class="mr-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="opacity-90 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </a> -->
                
            </div>
            <div class="flex flex-auto flex-col bg-gray-dark p-8 space-y-6 overflow-y-auto no-scrollbar">
                <div class="bg-gray-normal p-4 px-6 rounded-xl space-y-6 w-auto h-auto ">
                    
                        <h1 class="text-2xl font-extrabold opacity-90">
                            Jadwal Mingguan
                        </h1>

                        <div class="space-y-2">
                            <div class=" grid grid-flow-col grid-cols-8 grid-rows-1 gap-2 h-20">
                                <div class=" flex justify-center items-center  rounded-lg" >
                                    
                                </div>
                                <div class="bg-gray-light flex justify-center items-center  rounded-lg" >
                                    <h1 class="text-xl font-medium opacity-90">
                                        Minggu
                                    </h1>
                                </div>
                                <div class="bg-gray-light flex justify-center items-center  rounded-lg" >
                                    <h1 class="text-xl font-medium opacity-90">
                                        Senin
                                    </h1>
                                </div>
                                <div class="bg-gray-light flex justify-center items-center  rounded-lg" >
                                    <h1 class="text-xl font-medium opacity-90">
                                        Selasa
                                    </h1>
                                </div>
                                <div class="bg-gray-light flex justify-center items-center  rounded-lg" >
                                    <h1 class="text-xl font-medium opacity-90">
                                        Rabu
                                    </h1>
                                </div>
                                <div class="bg-gray-light flex justify-center items-center  rounded-lg" >
                                    <h1 class="text-xl font-medium opacity-90">
                                        Kamis
                                    </h1>
                                </div>
                                <div class="bg-gray-light flex justify-center items-center  rounded-lg" >
                                    <h1 class="text-xl font-medium opacity-90">
                                        Jumat
                                    </h1>
                                </div>
                                <div class="bg-gray-light flex justify-center items-center  rounded-lg" >
                                    <h1 class="text-xl font-medium opacity-90">
                                        Sabtu
                                    </h1>
                                </div>
    
                            </div>
    
                            <!-- CONTAINER -->
                            <div class="overflow-hidden ">
                                <div class=" grid grid-flow-row grid-cols-8 grid-rows-12 gap-2 ">
                                <?php

                                    $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 11, 22);
                                    $row = 48;

                                    for ($i = 0; $i < $row; $i= $i+1): ?>
                                    <div class="flex-none bg-gray-light flex justify-center items-center h-20 rounded-lg" >
                                        <h1 class="text-xl font-medium opacity-90">
                                            <?php
                                                if($i%2==0){
                                                    if($i<20){
                                                        echo "0". ($i/2) . ":". "00";
                                                    }else{
                                                        echo ($i/2). ":00";
                                                    }
                                                } else{
                                                    if($i<20){
                                                        echo "0". intdiv($i, 2) . ":". "30";
                                                    }else{
                                                        echo intdiv($i, 2) . ":30";
                                                    }
                                                }
                                            ?>
                                        </h1>
                                    </div>
                                    
                                    <div onclick="setJadwal()" class="flex-none bg-jadwal-before flex justify-center items-center hover:bg-gray-lightest rounded-lg cursor-pointer" >
                                        <div class="w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                                            <svg  " width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0003 16.0001H10.667M16.0003 10.6667V16.0001V10.6667ZM16.0003 16.0001V21.3334V16.0001ZM16.0003 16.0001H21.3337H16.0003Z" stroke="gray" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path opacity="0.87" d="M16.0003 29.3334C23.3641 29.3334 29.3337 23.3639 29.3337 16.0001C29.3337 8.63629 23.3641 2.66675 16.0003 2.66675C8.63653 2.66675 2.66699 8.63629 2.66699 16.0001C2.66699 23.3639 8.63653 29.3334 16.0003 29.3334Z" stroke="gray" stroke-width="4" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div onclick="setJadwal()"  class="flex-none bg-jadwal-before flex justify-center items-center hover:bg-gray-lightest rounded-lg cursor-pointer" >
                                        <div class="w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                                            <svg  " width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0003 16.0001H10.667M16.0003 10.6667V16.0001V10.6667ZM16.0003 16.0001V21.3334V16.0001ZM16.0003 16.0001H21.3337H16.0003Z" stroke="gray" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path opacity="0.87" d="M16.0003 29.3334C23.3641 29.3334 29.3337 23.3639 29.3337 16.0001C29.3337 8.63629 23.3641 2.66675 16.0003 2.66675C8.63653 2.66675 2.66699 8.63629 2.66699 16.0001C2.66699 23.3639 8.63653 29.3334 16.0003 29.3334Z" stroke="gray" stroke-width="4" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div  onclick="setJadwal()" class="flex-none bg-jadwal-before flex justify-center items-center hover:bg-gray-lightest rounded-lg cursor-pointer" >
                                        <div class="w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                                            <svg  " width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0003 16.0001H10.667M16.0003 10.6667V16.0001V10.6667ZM16.0003 16.0001V21.3334V16.0001ZM16.0003 16.0001H21.3337H16.0003Z" stroke="gray" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path opacity="0.87" d="M16.0003 29.3334C23.3641 29.3334 29.3337 23.3639 29.3337 16.0001C29.3337 8.63629 23.3641 2.66675 16.0003 2.66675C8.63653 2.66675 2.66699 8.63629 2.66699 16.0001C2.66699 23.3639 8.63653 29.3334 16.0003 29.3334Z" stroke="gray" stroke-width="4" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div onclick="setJadwal()"  class="flex-none bg-jadwal-before flex justify-center items-center hover:bg-gray-lightest rounded-lg cursor-pointer" >
                                        <div class="w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                                            <svg  " width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0003 16.0001H10.667M16.0003 10.6667V16.0001V10.6667ZM16.0003 16.0001V21.3334V16.0001ZM16.0003 16.0001H21.3337H16.0003Z" stroke="gray" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path opacity="0.87" d="M16.0003 29.3334C23.3641 29.3334 29.3337 23.3639 29.3337 16.0001C29.3337 8.63629 23.3641 2.66675 16.0003 2.66675C8.63653 2.66675 2.66699 8.63629 2.66699 16.0001C2.66699 23.3639 8.63653 29.3334 16.0003 29.3334Z" stroke="gray" stroke-width="4" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div  onclick="setJadwal()" class="flex-none bg-jadwal-before flex justify-center items-center hover:bg-gray-lightest rounded-lg cursor-pointer" >
                                        <div class="w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                                            <svg  " width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0003 16.0001H10.667M16.0003 10.6667V16.0001V10.6667ZM16.0003 16.0001V21.3334V16.0001ZM16.0003 16.0001H21.3337H16.0003Z" stroke="gray" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path opacity="0.87" d="M16.0003 29.3334C23.3641 29.3334 29.3337 23.3639 29.3337 16.0001C29.3337 8.63629 23.3641 2.66675 16.0003 2.66675C8.63653 2.66675 2.66699 8.63629 2.66699 16.0001C2.66699 23.3639 8.63653 29.3334 16.0003 29.3334Z" stroke="gray" stroke-width="4" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div onclick="setJadwal()"  class="flex-none bg-jadwal-before flex justify-center items-center hover:bg-gray-lightest rounded-lg cursor-pointer" >
                                        <div class="w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                                            <svg  " width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0003 16.0001H10.667M16.0003 10.6667V16.0001V10.6667ZM16.0003 16.0001V21.3334V16.0001ZM16.0003 16.0001H21.3337H16.0003Z" stroke="gray" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path opacity="0.87" d="M16.0003 29.3334C23.3641 29.3334 29.3337 23.3639 29.3337 16.0001C29.3337 8.63629 23.3641 2.66675 16.0003 2.66675C8.63653 2.66675 2.66699 8.63629 2.66699 16.0001C2.66699 23.3639 8.63653 29.3334 16.0003 29.3334Z" stroke="gray" stroke-width="4" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div onclick="setJadwal()"  class="flex-none bg-jadwal-before flex justify-center items-center hover:bg-gray-lightest rounded-lg cursor-pointer" >
                                        <div class="w-full h-full flex justify-center items-center opacity-0 hover:opacity-100">
                                            <svg  " width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.0003 16.0001H10.667M16.0003 10.6667V16.0001V10.6667ZM16.0003 16.0001V21.3334V16.0001ZM16.0003 16.0001H21.3337H16.0003Z" stroke="gray" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path opacity="0.87" d="M16.0003 29.3334C23.3641 29.3334 29.3337 23.3639 29.3337 16.0001C29.3337 8.63629 23.3641 2.66675 16.0003 2.66675C8.63653 2.66675 2.66699 8.63629 2.66699 16.0001C2.66699 23.3639 8.63653 29.3334 16.0003 29.3334Z" stroke="gray" stroke-width="4" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                    

                                </div>
                            </div>
                            
                            
                        </div>

                        
                </div>
            </div>
        </div>
    </div>
    <div id="form-agenda" class="  absolute flex justify-center items-center -top-full left-0 w-full h-full z-40  backdrop-filter  transform  transition duration-500 ease-in-out">
        
        <div  class="bg-gray-light rounded-2xl  w-4/12 flex flex-col p-8 ">
            <div class="flex justify-end">
                <svg onclick="closeJadwal()" class="cursor-pointer w-8 hover:opacity-60" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.87">
                    <path d="M9.3003 9.30002C9.65187 8.94889 10.1284 8.75167 10.6253 8.75167C11.1222 8.75167 11.5987 8.94889 11.9503 9.30002L20.0003 17.35L28.0503 9.30002C28.222 9.1158 28.429 8.96805 28.659 8.86557C28.889 8.76309 29.1372 8.70798 29.389 8.70354C29.6408 8.6991 29.8908 8.74541 30.1243 8.83971C30.3578 8.93401 30.5699 9.07437 30.7479 9.25242C30.9259 9.43047 31.0663 9.64255 31.1606 9.87602C31.2549 10.1095 31.3012 10.3596 31.2968 10.6113C31.2923 10.8631 31.2372 11.1114 31.1348 11.3414C31.0323 11.5714 30.8845 11.7784 30.7003 11.95L22.6503 20L30.7003 28.05C30.8845 28.2217 31.0323 28.4287 31.1348 28.6587C31.2372 28.8887 31.2923 29.137 31.2968 29.3887C31.3012 29.6405 31.2549 29.8905 31.1606 30.124C31.0663 30.3575 30.9259 30.5696 30.7479 30.7476C30.5699 30.9257 30.3578 31.066 30.1243 31.1603C29.8908 31.2546 29.6408 31.3009 29.389 31.2965C29.1372 31.2921 28.889 31.2369 28.659 31.1345C28.429 31.032 28.222 30.8842 28.0503 30.7L20.0003 22.65L11.9503 30.7C11.5949 31.0312 11.1247 31.2115 10.639 31.203C10.1532 31.1944 9.68978 30.9976 9.34625 30.6541C9.00272 30.3105 8.80594 29.8471 8.79737 29.3613C8.7888 28.8756 8.9691 28.4055 9.3003 28.05L17.3503 20L9.3003 11.95C8.94918 11.5985 8.75195 11.1219 8.75195 10.625C8.75195 10.1281 8.94918 9.65158 9.3003 9.30002Z" fill="white"/>
                    <path d="M9.3003 9.30002C9.65187 8.94889 10.1284 8.75167 10.6253 8.75167C11.1222 8.75167 11.5987 8.94889 11.9503 9.30002L20.0003 17.35L28.0503 9.30002C28.222 9.1158 28.429 8.96805 28.659 8.86557C28.889 8.76309 29.1372 8.70798 29.389 8.70354C29.6408 8.6991 29.8908 8.74541 30.1243 8.83971C30.3578 8.93401 30.5699 9.07437 30.7479 9.25242C30.9259 9.43047 31.0663 9.64255 31.1606 9.87602C31.2549 10.1095 31.3012 10.3596 31.2968 10.6113C31.2923 10.8631 31.2372 11.1114 31.1348 11.3414C31.0323 11.5714 30.8845 11.7784 30.7003 11.95L22.6503 20L30.7003 28.05C30.8845 28.2217 31.0323 28.4287 31.1348 28.6587C31.2372 28.8887 31.2923 29.137 31.2968 29.3887C31.3012 29.6405 31.2549 29.8905 31.1606 30.124C31.0663 30.3575 30.9259 30.5696 30.7479 30.7476C30.5699 30.9257 30.3578 31.066 30.1243 31.1603C29.8908 31.2546 29.6408 31.3009 29.389 31.2965C29.1372 31.2921 28.889 31.2369 28.659 31.1345C28.429 31.032 28.222 30.8842 28.0503 30.7L20.0003 22.65L11.9503 30.7C11.5949 31.0312 11.1247 31.2115 10.639 31.203C10.1532 31.1944 9.68978 30.9976 9.34625 30.6541C9.00272 30.3105 8.80594 29.8471 8.79737 29.3613C8.7888 28.8756 8.9691 28.4055 9.3003 28.05L17.3503 20L9.3003 11.95C8.94918 11.5985 8.75195 11.1219 8.75195 10.625C8.75195 10.1281 8.94918 9.65158 9.3003 9.30002Z" stroke="white"/>
                    </g>
                </svg>
            </div>
            
            <form action="#" class="space-y-16">
                <div class="flex flex-row space-x-3 justify-center items-center">
                    <h1 class="text-2xl font-bold opacity-90 text-center">
                        Tambah Jadwal Baru
                      </h1>
                </div>
                <div class="space-y-4">
                    <div class="flex flex-row space-x-4 items-center">
                        <div class=" w-1/4">
                            <h1 class="text-2xl font-bold opacity-90">
                               Subjek
                             </h1>
                        </div>
                        <div class="w-full">
                            <select name="cars" id="cars" class="bg-gray-lightest w-full rounded-xl border-none p-4 pl-5 text-xl">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="flex flex-row space-x-4 items-center">
                        <div class=" w-1/4">
                            <h1 class="text-2xl font-bold opacity-90">
                               Jam
                             </h1>
                        </div>
                        <div class="w-full">
                            <input type="time" class="rounded-xl bg-gray-normal border-0 text-xl w-1/3 p-4 font-bold ">
                            <input type="time" class="rounded-xl bg-gray-normal border-0 text-xl w-1/3 p-4 ml-4 font-bold ">
                        </div>
                    </div>
                    <div class="flex flex-row space-x-4">
                        <div class=" w-1/4">
                            <h1 class="text-2xl font-bold opacity-90 pt-2">
                               Description
                             </h1>
                        </div>
                        <div class="w-full">
                            <textarea name="judul" id="" cols="30" rows="2" class="rounded-xl bg-gray-normal border-0 text-xl w-full no-scrollbar p-4 placeholder-italic font-bold" placeholder="Tambah detail disini..."></textarea>
                        </div>
                    </div>
                    <div class="w-full flex justify-end">
                        <input type="submit" value="Tambah Agenda" class="flex flex-row cursor-pointer bg-gradient-to-r from-primary to-gray-lightest shadow-lg hover:opacity-60 py-4 px-6 rounded-2xl font-bold text-xl">
                    </div>
                </div>
            </form>
            
           
            
        </div>
    </div>
    
</body>
</html>
