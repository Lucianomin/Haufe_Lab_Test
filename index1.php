<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Servicii La Cheie</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script/index.js"></script>

</head>

<body>

    <!-- component -->
<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 fixed inset-x-0 top-0 z-50">
        <div class="flex flex-wrap justify-around items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Servico</span>
            </a>
            <div class="flex items-center lg:order-1 xl:order-2 sm:order-1 py-2">
                <a href="Anunturi/addanunt.html" 
                class="hidden sm:block text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Anunt nou + </a>
                <a href="addcerere.html" 
                class="hidden sm:block text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Cerere + </a>
            

<!-- ====== Account Dropdowns Section Start -->
<section class="">
    <div class="container">
      <!-- Account Dropdown Style One -->
      <div x-data="{showDropdown: false}" class="flex justify-center">
        <div
          @click.outside="showDropdown = false"
          class="relative inline-block"
        >
          <button
            @click="showDropdown = !showDropdown"
            class="inline-flex h-10 items-center justify-center gap-2 rounded-lg   broder-blue-700 bg-blue-700 hover:bg-blue-800 px-6 py-3 text-base font-medium text-white"
          >
            Cont
            <span
              :class="showDropdown ? '-scale-y-100' : ''"
              class="duration-100"
            >
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M10 14.25C9.8125 14.25 9.65625 14.1875 9.5 14.0625L2.3125 7C2.03125 6.71875 2.03125 6.28125 2.3125 6C2.59375 5.71875 3.03125 5.71875 3.3125 6L10 12.5312L16.6875 5.9375C16.9688 5.65625 17.4062 5.65625 17.6875 5.9375C17.9688 6.21875 17.9688 6.65625 17.6875 6.9375L10.5 14C10.3437 14.1562 10.1875 14.25 10 14.25Z"
                  fill="currentColor"
                />
              </svg>
            </span>
          </button>
          <div
            :class="showDropdown ? 'block' : 'hidden'"
            class="absolute right-0 top-full w-[240px] divide-y divide-stroke overflow-hidden rounded-lg bg-white "
          >
            <div class="px-4 py-3">
              <p class="text-sm font-semibold ">
                Contul meu
              </p>
            </div>
            <div>
              <a
                href="Profil/profil.html"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                Profil
              </a>
              <a
                href="Anunturi/addanunt.html"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                + Adauga anunt
              </a>
              <!--a
                href="javascript:void(0)"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                Keyboard shortcuts
                <span class="text-xs text-dark-5"> ⌘K </span>
              </a-->
            </div>
            <div>
              <a
                href="addcerere.html"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                + Adauga cerere 
              </a>
              <a
                href="addaccount.html"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                Cererile mele
              </a>
              <a
                href="Anunturi\anunturile_mele.php"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                Anunturile mele
              </a>
            </div>
            <div>
              <a
                href="anunturi.html"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                Anunturi promovate
              </a>
              <!--a
                href="anunturi.html"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                Anunturi
              </a-->
              <!--a
                href="index1.php"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                Preturi
              </a-->
              
            </div>
            <div>
            <a
                href="autentificare.php"
                class="flex w-full items-center justify-between px-4 py-2.5 text-sm font-medium text-dark hover:bg-gray-50"
              >
                Creeaza cont/Deconecteaza-te
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Account Dropdowns Section End -->

                <!--a href="signup.html" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">+Anunt</a>
                <a href="signup.html" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cere o oferta   </a>
-->
                <!--button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button-->
            </div>
            <div class="hidden justify-normal items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <!-- component -->

            </div>
        </div>
    </nav>
</header>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

<!-- component -->





  <!-- Search Bar-->
<section class=" bg-blue-500ray-50 ">
    <div class="py-10  sm:py-16 block lg:py-24 relative bg-opacity-50  z-40  " >


      <div class="relative mx-auto h-full px-4 pb-20 md:pb-10 sm:max-w-full md:max-w-full lg:max-w-screen-xl lg:px-8 overflow-x-hidden">

            <div class=" absolute  top-0 -right-1/4 z-0  opacity-10 ">
                <!--svg width="800px" height="800px" viewBox="0 0 24 24"
                    class="w-96 z-0  h-full    object-fill fill-g text-g" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 6C12 5.44772 11.5523 5 11 5C10.4477 5 10 5.44772 10 6V16C10 16.5523 10.4477 17 11 17C11.5523 17 12 16.5523 12 16V6ZM9 9C9 8.44772 8.55228 8 8 8C7.44772 8 7 8.44772 7 9V16C7 16.5523 7.44772 17 8 17C8.55228 17 9 16.5523 9 16V9ZM15 9C15 8.44772 14.5523 8 14 8C13.4477 8 13 8.44772 13 9V16C13 16.5523 13.4477 17 14 17C14.5523 17 15 16.5523 15 16V9ZM18 13C18 12.4477 17.5523 12 17 12C16.4477 12 16 12.4477 16 13V16C16 16.5523 16.4477 17 17 17C17.5523 17 18 16.5523 18 16V13ZM6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15V16C4 16.5523 4.44772 17 5 17C5.55228 17 6 16.5523 6 16V15ZM21 15C21 14.4477 20.5523 14 20 14C19.4477 14 19 14.4477 19 15V16C19 16.5523 19.4477 17 20 17C20.5523 17 21 16.5523 21 16V15ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H21C21.5523 20 22 19.5523 22 19C22 18.4477 21.5523 18 21 18H4Z" />
                </svg-->
            </div>

            <!--div class=" absolute -bottom-0 -left-1/4 z-0  opacity-10 ">
                <svg width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                    class="w-48 z-0  h-full -rotate-90   object-fill fill-r text-r">
                    <path
                        d="M32 225h12.993A4.004 4.004 0 0 0 49 220.997V138.01c0-4.976.724-5.04 1.614-.16l12.167 66.708c.397 2.177 2.516 3.942 4.713 3.942h8.512a3.937 3.937 0 0 0 3.947-4S79 127.5 80 129s14.488 52.67 14.488 52.67c.559 2.115 2.8 3.83 5.008 3.83h8.008a3.993 3.993 0 0 0 3.996-3.995v-43.506c0-4.97 1.82-5.412 4.079-.965l10.608 20.895c1.001 1.972 3.604 3.571 5.806 3.571h9.514a3.999 3.999 0 0 0 3.993-4.001v-19.49c0-4.975 2.751-6.074 6.155-2.443l6.111 6.518c1.51 1.61 4.528 2.916 6.734 2.916h7c2.21 0 5.567-.855 7.52-1.92l9.46-5.16c1.944-1.06 5.309-1.92 7.524-1.92h23.992a4.002 4.002 0 0 0 4.004-3.992v-7.516a3.996 3.996 0 0 0-4.004-3.992h-23.992c-2.211 0-5.601.823-7.564 1.834l-4.932 2.54c-4.423 2.279-12.028 3.858-16.993 3.527l2.97.198c-4.962-.33-10.942-4.12-13.356-8.467l-11.19-20.14c-1.07-1.929-3.733-3.492-5.939-3.492h-7c-2.21 0-4 1.794-4 4.001v19.49c0 4.975-1.14 5.138-2.542.382l-12.827-43.535c-.625-2.12-2.92-3.838-5.127-3.838h-8.008c-2.207 0-3.916 1.784-3.817 4.005l1.92 42.998c.221 4.969-.489 5.068-1.585.224l-15.13-66.825c-.488-2.155-2.681-3.902-4.878-3.902h-8.512a3.937 3.937 0 0 0-3.947 4s.953 77-.047 75.5-13.937-92.072-13.937-92.072C49.252 34.758 47.21 33 45 33H31.999"
                        fill-rule="evenodd" />
                </svg>
            </div-->
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative">
                <div class='flex flex-col items-center justify-center py-5 px-3 mt-20'>
                    <!--CSS for search bar-->
                    <style>
                      .autocomplete-items {
                          position: absolute;
                          border: 1px solid #ddd;
                          border-top: none;
                          z-index: 99;
                          background-color: #fff;
                          max-height: 150px;
                          overflow-y: auto;
                          width: calc(100% - 2px); /* Adjust width to fit within the container */
                          top: 100%; /* Position below the search bar */
                          left: 0;
                      }
                      .autocomplete-item {
                          padding: 10px;
                          cursor: pointer;
                      }
                      .autocomplete-item:hover {
                          background-color: #ddd;
                      }
                  </style>


                  <!-- Form for search functionality -->
<form action="Anunturi/afisare_anunturi.php" method="GET" class="w-full max-w-lg mx-10" id="searchForm">
    <!-- Search Bar -->
    <div class="relative flex w-full rounded bg-white shadow-lg border border-gray-300 mb-4">
        <input id="searchInput" class="w-full border-none bg-transparent px-4 py-3 text-gray-600 outline-none focus:outline-none" type="search" name="search" placeholder="Cauta..." />
        
        <!-- Search Button -->
        <button type="submit" class="m-2 rounded bg-blue-600 px-4 py-2 text-white">
            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
        
        <!-- Autocomplete Suggestions -->
        <div id="autocomplete-list" class="autocomplete-items hidden"></div>
    </div>

    <!-- Category/Location Bar -->
    <div class="flex w-full rounded bg-white shadow-lg border border-gray-300 p-4">
        <!-- County Select Dropdown -->
        <select id="countySelect" name="county" class="w-1/2 border-none bg-transparent px-4 py-3 text-gray-600 outline-none focus:outline-none">
            <option value="Judet">Toată Țara</option>
            <option value="Alba">Alba</option>
            <option value="Arad">Arad</option>
            <option value="Argeș">Argeș</option>
            <option value="Bacău">Bacău</option>
            <option value="Bihor">Bihor</option>
            <option value="Bistrița-Năsăud">Bistrița-Năsăud</option>
            <option value="Botoșani">Botoșani</option>
            <option value="Brașov">Brașov</option>
            <option value="Brăila">Brăila</option>
            <option value="București">București</option>
            <option value="Buzău">Buzău</option>
            <option value="Caraș-Severin">Caraș-Severin</option>
            <option value="Călărași">Călărași</option>
            <option value="Cluj">Cluj</option>
            <option value="Constanța">Constanța</option>
            <option value="Covasna">Covasna</option>
            <option value="Dâmbovița">Dâmbovița</option>
            <option value="Dolj">Dolj</option>
            <option value="Galați">Galați</option>
            <option value="Giurgiu">Giurgiu</option>
            <option value="Gorj">Gorj</option>
            <option value="Harghita">Harghita</option>
            <option value="Hunedoara">Hunedoara</option>
            <option value="Ialomița">Ialomița</option>
            <option value="Iași">Iași</option>
            <option value="Ilfov">Ilfov</option>
            <option value="Maramureș">Maramureș</option>
            <option value="Mehedinți">Mehedinți</option>
            <option value="Mureș">Mureș</option>
            <option value="Neamț">Neamț</option>
            <option value="Olt">Olt</option>
            <option value="Prahova">Prahova</option>
            <option value="Satu Mare">Satu Mare</option>
            <option value="Sălaj">Sălaj</option>
            <option value="Sibiu">Sibiu</option>
            <option value="Suceava">Suceava</option>
            <option value="Teleorman">Teleorman</option>
            <option value="Timiș">Timiș</option>
            <option value="Tulcea">Tulcea</option>
            <option value="Vaslui">Vaslui</option>
            <option value="Vâlcea">Vâlcea</option>
            <option value="Vrancea">Vrancea</option>
        </select>

        <!-- City/Village Select Dropdown -->
        <select id="citySelect" name="city" class="w-1/2 border-none bg-transparent px-4 py-3 text-gray-600 outline-none focus:outline-none">
            <option value="Localitate">Selectează o Localitate</option>
        </select>
    </div>
</form>

<!--SCRIPT for autocomplete search bar and city select-->
<script>
    // Autocomplete data for categories
    const categories = {
        "Servicii": ["Transport","Tamplarie","Instalatori","Curatenie","Constructii","Electricitate","Mecanici","Cursuri","Arta","Birotica","Medici","Beauty","Servicii IT","Inchirieri","Bricolaj","Marketing","Antrenori","Colectionari"]
    };

    const searchInput = document.getElementById('searchInput');
    const autocompleteList = document.getElementById('autocomplete-list');

    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        autocompleteList.innerHTML = '';

        if (!query) {
            autocompleteList.classList.add('hidden');
            return;
        }

        const matches = Object.entries(categories).flatMap(([category, items]) => {
            return items.filter(item => item.toLowerCase().includes(query)).map(item => ({ item, category }));
        });

        if (matches.length > 0) {
            autocompleteList.classList.remove('hidden');
            matches.forEach(match => {
                const div = document.createElement('div');
                div.classList.add('autocomplete-item');
                div.textContent = match.item;
                div.addEventListener('click', function() {
                    searchInput.value = match.item;
                    autocompleteList.classList.add('hidden');
                });
                autocompleteList.appendChild(div);
            });
        } else {
            autocompleteList.classList.add('hidden');
        }
    });

    // Hide autocomplete list when clicking outside
    document.addEventListener('click', function(e) {
        if (!autocompleteList.contains(e.target) && e.target !== searchInput) {
            autocompleteList.classList.add('hidden');
        }
    });

    // Data structure to map each county to its corresponding cities or villages
    const countyToCities = {
                          "Alba": ["Alba Iulia", "Aiud", "Blaj", "Cugir", "Sebeș"],
    "Arad": ["Arad", "Lipova", "Ineu", "Curtici"],
    "Argeș": ["Pitești", "Mioveni", "Curtea de Argeș", "Câmpulung"],
    "Bacău": ["Bacău", "Onești", "Comănești", "Moinești"],
    "Bihor": ["Oradea", "Salonta", "Beiuș", "Marghita"],
    "Bistrița-Năsăud": ["Bistrița", "Năsăud", "Sângeorz-Băi", "Prundu Bârgăului"],
    "Botoșani": ["Botoșani", "Dorohoi", "Săveni", "Flămânzi"],
    "Brașov": ["Brașov", "Făgăraș", "Săcele", "Rupea"],
    "Brăila": ["Brăila", "Însurăței", "Făurei", "Râmnicelu"],
    "București": ["Sector 1", "Sector 2", "Sector 3", "Sector 4", "Sector 5", "Sector 6"],
    "Buzău": ["Buzău", "Râmnicu Sărat", "Pogoanele", "Nehoiu"],
    "Călărași": ["Călărași", "Oltenița", "Fundulea", "Budești"],
    "Caraș-Severin": ["Reșița", "Caransebeș", "Bocșa", "Moldova Nouă"],
    "Cluj": ["Cluj-Napoca", "Turda", "Dej", "Câmpia Turzii", "Gherla"],
    "Constanța": ["Constanța", "Mangalia", "Năvodari", "Eforie"],
    "Covasna": ["Sfântu Gheorghe", "Târgu Secuiesc", "Întorsura Buzăului", "Baraolt"],
    "Dâmbovița": ["Târgoviște", "Moreni", "Pucioasa", "Răcari"],
    "Dolj": ["Craiova", "Băilești", "Dăbuleni", "Filiași"],
    "Galați": ["Galați", "Tecuci", "Smârdan", "Măcin"],
    "Giurgiu": ["Giurgiu", "Bolintin-Vale", "Măgurele", "Răsărit"],
    "Gorj": ["Târgu Jiu", "Motru", "Rovinari", "Novaci"],
    "Harghita": ["Miercurea Ciuc", "Odorheiu Secuiesc", "Balan", "Gheorgheni"],
    "Hunedoara": ["Deva", "Hunedoara", "Orăștie", "Petroșani"],
    "Ialomița": ["Slobozia", "Fetești", "Țăndărei", "Urziceni"],
    "Iași": ["Iași", "Pașcani", "Hârlău", "Târgu Frumos"],
    "Ilfov": ["Buftea", "Voluntari", "Măgurele", "Pantelimon"],
    "Maramureș": ["Baia Mare", "Sighetu Marmației", "Seini", "Șomcuta Mare"],
    "Mehedinți": ["Drobeta-Turnu Severin", "Orșova", "Baia de Aramă", "Vânju Mare"],
    "Mureș": ["Târgu Mureș", "Reghin", "Sighișoara", "Luduș"],
    "Neamț": ["Piatra Neamț", "Roman", "Târgu Neamț", "Bicaz"],
    "Olt": ["Slatina", "Caracal", "Drăgănești-Olt", "Scornicești"],
    "Prahova": ["Ploiești", "Câmpina", "Sinaia", "Breaza"],
    "Satu Mare": ["Satu Mare", "Carei", "Tășnad", "Livada"],
    "Sălaj": ["Zalău", "Șimleu Silvaniei", "Jibou", "Cehu Silvaniei"],
    "Sibiu": ["Sibiu", "Hermannstadt", "Mediaș", "Agnita"],
    "Suceava": ["Suceava", "Fălticeni", "Rădăuți", "Câmpulung Moldovenesc"],
    "Teleorman": ["Alexandria", "Roșiorii de Vede", "Turnu Măgurele", "Zimnicea"],
    "Timiș": ["Timișoara", "Reșița", "Lugoj", "Sânnicolau Mare"],
    "Tulcea": ["Tulcea", "Sulina", "Măcin", "Isaccea"],
    "Vaslui": ["Vaslui", "Bârlad", "Huși", "Negrești"],
    "Vâlcea": ["Râmnicu Vâlcea", "Drăgășani", "Călimănești", "Băile Olănești"],
    "Vrancea": ["Focșani", "Adjud", "Mărășești", "Panciu"]
                      };

    // Handle county and city dropdowns
    const countySelect = document.getElementById("countySelect");
    const citySelect = document.getElementById("citySelect");

    countySelect.addEventListener("change", function() {
        const selectedCounty = this.value;

        // Clear previous city options
        citySelect.innerHTML = '<option value="Localitate">Selectează o Localitate</option>';

        if (countyToCities[selectedCounty]) {
            countyToCities[selectedCounty].forEach(city => {
                const option = document.createElement("option");
                option.value = city;
                option.textContent = city;
                citySelect.appendChild(option);
            });
        }
    });
</script>




   <!--end search bar -->





                <br>
                <div class=" mx-auto text-center">
                    <div class="inline-flex px-4 py-1.5 mx-auto rounded-full  ">
                        <p class="text-3xl font-semibold tracking-widest text-g uppercase">Servicii:</p>
                    </div>
                    <p class="mt-4 text-base leading-relaxed text-gray-600 group-hover:text-white">Serviciile de care tu ai nevoie, intr-un singur loc..</p>
                </div> 
                
            <!-- Inceput butoane categorii-->  
          <div class="grid grid-cols-2 gap-0 mt-12 sm:grid-cols-4 xl:grid-cols-9 lg:grid-cols-9 lg:mt-20   ">

            <!-- Transport Button -->
                      <a href="Anunturi/afisare_anunturi.php?search=Transport&county=Judet&city=Localitate"
                        class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                        <div class="py-2 px-2 relative">
                          <img style="width: 100px; height: 100px;" src="img/transport.png" alt="">
                          <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Transport</h3>
                        </div>
                      </a>



                        <!-- Tamplarie Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Tamplarie&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/tamplarie.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Tamplarie</h3>
                </div>
            </a>

            <!-- Instalatori Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Instalatori&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/instalatori.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Instalatori</h3>
                </div>
            </a>

            <!-- Curatenie Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Curatenie&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/curatenie.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Curatenie</h3>
                </div>
            </a>

            <!-- Constructii Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Constructii&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/constructii.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Constructii</h3>
                </div>
            </a>

            <!-- Electricitate Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Electricitate&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/electricitate.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Electricitate</h3>
                </div>
            </a>

            <!-- Mecanici Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Mecanici&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/mecanici.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Mecanici</h3>
                </div>
            </a>

            <!-- Cursuri Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Cursuri&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/cursuri.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Cursuri</h3>
                </div>
            </a>

            <!-- Arta Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Arta&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/arta.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Arta</h3>
                </div>
            </a>

            <!-- Birotica Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Birotica&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/birotica.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Birotica</h3>
                </div>
            </a>

            <!-- Medici Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Medici&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/medici.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Medici</h3>
                </div>
            </a>

            <!-- Beauty Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Beauty&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/beauty.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Beauty</h3>
                </div>
            </a>

            <!-- Servicii IT Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Servicii IT&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/serviciiIT.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Servicii IT</h3>
                </div>
            </a>

                        <!-- Inchirieri Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Inchirieri&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/inchirieri.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Inchirieri</h3>
                </div>
            </a>

            <!-- Bricolaj Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Bricolaj&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/bricolaj.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Bricolaj</h3>
                </div>
            </a>

            <!-- Marketing Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Marketing&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/marketing.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Marketing</h3>
                </div>
            </a>

            <!-- Antrenori Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Antrenori&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/antrenori.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Antrenori</h3>
                </div>
            </a>

            <!-- Colectionari Button -->
            <a href="Anunturi/afisare_anunturi.php?search=Colectionari&county=Judet&city=Localitate"
              class="transition-all duration-1000 bg-white hover:bg-blue-500 hover:shadow-xl rounded inline-flex justify-between items-center group-hover:text-white">
                <div class="py-2 px-2 relative">
                    <img style="width: 100px; height: 100px;" src="img/colectionari.png" alt="">
                    <h3 class="mt-4 px-2 text-lg font-semibold text-black hover:text-white items-center">Colectionari</h3>
                </div>
            </a>


                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once('core/controller.Class.php');
require_once('config.php');

$Controller = new Controller();
$db = new Connect();

try {
    // Fetch 3 random ads from `anunturi` table
    $stmt = $db->query("SELECT id, titlu, descriere, judet, localitate, nume_firma, persoana_contact, upload_foto, tip_pret, pret, valuta FROM anunturi ORDER BY RAND() LIMIT 3");
    $anunturi = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>

<div class="max-w-xl mx-auto text-center px-3">
    <div class="inline-flex px-4 py-1.5 mx-auto rounded-full">
        <p class="text-3xl font-semibold tracking-widest text-g uppercase">Anunturi recomandate:</p>
    </div>
</div>
<div class="py-10 sm:py-16 block lg:py-24 relative bg-opacity-50 z-40">
      <div
        class="relative mx-auto h-full px-4 pb-20 md:pb-10 sm:max-w-full md:max-w-full lg:max-w-screen-xl lg:px-8 overflow-x-hidden"
      >
        <div class="flex justify-center items-center">
          <ul
            class="grid grid-cols-1 xl:grid-cols-1 sm:grid-cols-1 gap-y-10 gap-x-3 items-center p-8 sm:px-10 xl:px-20"
          >
            <?php foreach ($anunturi as $row): ?>
            <li
              class="relative flex flex-col sm:flex-row gap-x-3 xl:flex-row items-start"
            >
              <!-- Imaginea -->
              <img
                src="<?= htmlspecialchars($row['upload_foto']) ?>"
                alt=""
                style="object-fit: cover; width: 300px; height: 250px"
                class="shadow-md rounded-lg bg-slate-50 w-[256px] h-[144px] sm:w-[256px] sm:h-[144px] object-cover"
              />

              <!-- Conținutul text -->
              <div class="ml-6 flex-1">
                <h3 class="mb-1 text-slate-900 font-semibold text-2xl">
                
                <span class="mb-1 block text-sm leading-8 text-blue-500"
                    ><?= htmlspecialchars($row['judet']) ?>, <?= htmlspecialchars($row['localitate']) ?></span
                  >
                  <span class="mb-1 block text-sm leading-8 text-gray-600">
                    <?php if (empty($row['nume_firma'])): ?> <?=
                    htmlspecialchars($row['persoana_contact']) ?> <?php else: ?>
                    <?= htmlspecialchars($row['nume_firma']) ?> <?php endif; ?>
                  </span>
                  <?= htmlspecialchars($row['titlu']) ?>
                </h3>
                <div class="prose prose-slate prose-sm text-slate-600">
                  <p><?= htmlspecialchars($row['descriere']) ?></p>
                  <div class="mt-2 font-semibold flex items-center space-x-4">
                    <span>
                      <?php if ($row['tip_pret'] == 1): ?> Pret la cerere <?php
                      elseif ($row['tip_pret'] == 2): ?> <?=
                      htmlspecialchars($row['pret']) ?> <?php if ($row['valuta']
                      == 1): ?> euro <?php elseif ($row['valuta'] == 2): ?> ron
                      <?php endif; ?> <?php endif; ?>
                    </span>
                    <a
                      href="detalii_anunt.php?id=<?= $row['id'] ?>"
                      class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded shadow-md transition duration-300"
                    >
                      Cerere ofertă
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
<style>
  .prose p {
    word-wrap: break-word; /* Sparge cuvintele lungi în mai multe linii */
    word-break: break-word; /* Sparge textul continuu fără spații */
    overflow-wrap: break-word; /* Asigură compatibilitatea cu toate browserele */
}
</style>




<!--footer-->
<!-- component -->
<!--link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"-->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<footer class="relative bg-blueGray-200 pt-8 pb-6 sm:px-20 xl:px-40">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap text-left lg:text-left">
      <div class="w-full lg:w-6/12 px-4">
        <h4 class="text-3xl fonat-semibold text-blueGray-700">Publica anuntul tau pe Servicii La Cheie!</h4>
        <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
          Cel mai bun motor de cautare servicii din Romania
        </h5>
        <div class="mt-6 lg:mb-0 mb-6">
          
           <a href="#"> <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-youtube"></i></button></a>
            <a href="#"> <button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-facebook-square"></i></button> </a>
            <a href="#"> <button class="bg-white text-pink-500 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-instagram"></i></button> </a>
            <a href="#"> <button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
            <i class="fab fa-tiktok"></i>
          </button></a>
        </div>
      </div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex flex-wrap items-top mb-6">
          <div class="w-full lg:w-4/12 px-4 ml-auto">
            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Detalii</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">Despre noi</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com?ref=njs-profile">Anunturi</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.github.com/creativetimofficial?ref=njs-profile">Misiunea noastra</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Abonamente</a>
              </li>
            </ul>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Resurse</span>
            <ul class="list-unstyled">
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">Licente</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Termenii &amp; Conditiile</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Polita de confidentialitate</a>
              </li>
              <li>
                <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Contacteaza-ne </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-6 border-blueGray-300">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Copyright © <span id="get-current-year">2024</span><a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">
          <a href="https://www.creative-tim.com?ref=njs-profile" class="text-blueGray-500 hover:text-blueGray-800">Servicii La Cheie</a>.
        </div>
      </div>
    </div>
  </div>
  
</footer>
</body>

</html>
