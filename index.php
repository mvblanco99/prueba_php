<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <div class="w-full h-screen bg-red-500">
    <div class="w-full mx-auto flex items-center">
    <!-- Table -->
    <div class="w-[50%]">
        <table>
          <thead>
            <tr>
              <td>Name</td>
              <td>Lastname</td>
            </tr>
          </thead>
          <tbody id="body_table">

          </tbody>

        </table>
      </div>
      <!-- Formulario -->
      <div class="w-[50%]">
        <form action="" method="post" class="w-[50%] flex flex-col gap-y-3">
          <label 
            for="" 
            class="h-fit rounded-md border-2 border-gray-200"
            >
              <input 
                type="text" 
                name="name" 
                class="w-full h-full border-none rounded-md p-1"
                required
              >
          </label>

          <label 
            for="last_name" 
            class="h-fit rounded-md border-2 border-gray-200"
          >
            <input 
              type="text" 
              name="last_name" 
              class="w-full h-full border-none rounded-md p-1"
              required
            >
          </label>

          <input 
            id="button"
            type="submit" 
            value="Buscar" 
            class="border-2 border-gray-200 rounded-md p-1 cursor-pointer"
          >
        </form> 
      </div>
    </div>
  </div>

  <template id="table_template">
    <!-- BODY TABLE -->
    <tbody id="body_table"> 
      <tr id="row_table">
        <td id="name_table">Manuel</td>
        <td id="lastname_table">Rodriguez</td>
      </tr>
  </template>

  <script src="./api.js"></script>
  <script src="./index.js" type="module"></script>
</body>
</html>