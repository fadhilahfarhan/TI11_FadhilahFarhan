<?php
class Animal
{
    public $animals;

    #construct
    public function __construct($data)
    {
        $this->animals = $data;
    }

    #fungsi index
    public function index()
    {
        foreach ($this->animals as $nama) {
            echo "- " . $nama . "<br>";
        }
    }

    #fungsi store
    public function store($data)
    {
        array_push($this->animals, $data);
    }

    #fungsi Update
    public function update($index, $data)
    {
        $this->animals[$index] = $data;
    }

    #fungsi Delete
    public function destroy($index)
    {
        unset($this->animals[$index]);
    }
}

#array nama nama hewan
$animals = ['Ayam', 'Ikan'];

#Objek
$animal = new Animal($animals);

#index
echo "Index - Menampilakan semua hewan <br>";
echo $animal->index();
echo "<br>";

#store
echo "Store - Menambahkan hewan <br>";
echo $animal->store("Burung");
echo $animal->index() . "<br>";

#update
echo "Update - Mengupdate hewan <br>";
echo $animal->update(0, "Kucing Anggora");
echo $animal->index() . "<br>";

#delete
echo "Delete - Menghapus hewan <br>";
echo $animal->destroy(1);
echo $animal->index() . "<br>";
?>