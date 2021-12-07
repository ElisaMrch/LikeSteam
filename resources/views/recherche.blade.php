<div align = "center"  style="margin-bottom: 10px" >
<form action = "{{ route('recherche')}}" class="d-flex">
    <select style="text-align:center;border-radius: 8px;margin-bottom: 5px;margin-left: 150px;width:50%"name = "categorie" value="{{ request()->categorie ?? ''}}">
        <option value = "">Catégorie</option>
          <option value = "Action">Action</option>
          <option value = "RPG">RPG</option>
          <option value = "Stratégie">Stratégie</option>
          <option value = "Aventure">Aventure</option>
          <option value = "Simulation">Simulation</option>
          <option value = "Sport">Sport</option>
          <option value = "VR">VR</option>
          <option value = "demo">demo</option>
    </select>
</div>
    <div style ="width:50%; margin-left: 150px" class="form-groupe mb-0 mr-1">
        <input type="text" name="recherche" class="form-control" value="{{ request()->recherche ?? ''}}">
    </div>

    <button 
        class="form-groupe mb-0 mr-1"
          type="submit"
          style="text-align:center;border-radius: 8px;margin-top: 10px;width:20%;background-color:grey;color: white">
          Rechercher
        </button>
</form>