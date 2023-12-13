<?php
session_start();

// Definisikan kelas Book
class Book {
    private $title;
    private $author;
    private $isAvailable;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->isAvailable = true; // Buku tersedia saat pertama kali dibuat
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function isAvailable() {
        return $this->isAvailable;
    }

    public function borrowBook() {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return true; // Peminjaman berhasil
        } else {
            return false; // Buku sedang dipinjam
        }
    }

    public function returnBook() {
        $this->isAvailable = true;
        return true; // Pengembalian berhasil
    }
}

// Contoh penggunaan kelas Book
$book1 = new Book("Computing OOP PHP", "Kesh Gans");
$book2 = new Book("Belajar OOP Bersama Rakesh", "Rakesh");
$book3 = new Book("Pedoman UI/UX", "Kez");
$book4 = new Book("Tutorial Animasi 3D UI/UX", "Kez");
$book5 = new Book("Tutorial Radiant", "Chem");
$book6 = new Book("Tutorial Top Frag", "Budz");

// Array untuk menyimpan informasi buku
$books = [
    $book1,
    $book2,
    $book3,
    $book4,
    $book5,
    $book6
    // Tambahkan buku lain jika diperlukan
];

// Inisialisasi $_SESSION['borrowed_books'] jika belum ada
if (!isset($_SESSION['borrowed_books'])) {
    $_SESSION['borrowed_books'] = [];
}

// Proses peminjaman dan pengembalian buku
if(isset($_POST['borrow_book']) || isset($_POST['return_book'])){
    foreach ($books as $book) {
        if(isset($_POST['borrow_book']) && $_POST['borrow_book'] == $book->getTitle()) {
            $success = $book->borrowBook();
            if ($success) {
                $_SESSION['borrowed_books'][$book->getTitle()] = true; // Simpan status peminjaman buku dalam session
            }
        }

        if(isset($_POST['return_book']) && $_POST['return_book'] == $book->getTitle()) {
            $success = $book->returnBook();
            if ($success && isset($_SESSION['borrowed_books'][$book->getTitle()])) {
                unset($_SESSION['borrowed_books'][$book->getTitle()]); // Hapus status peminjaman buku dari session saat pengembalian
            }
        }
    }
}

$searchResult = [];

if (isset($_POST['search_book'])) {
    $searchTerm = $_POST['search_book'];

    foreach ($books as $book) {
        if (stripos($book->getTitle(), $searchTerm) !== false) {
            $searchResult[] = $book;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    <h1>Dashboard</h1>

    <div class="search-books">
        <!-- Form pencarian buku -->
        <form action="" method="post">
            <input type="text" name="search_book" placeholder="Cari buku berdasarkan nama">
            <button type="submit">Cari</button>
        </form>

    <!-- Hasil pencarian buku -->
    <?php if (isset($searchResult) && !empty($searchResult)) : ?>
        <div class="search-result">
            <h2>Hasil Pencarian</h2>
            <ul>
                <?php foreach ($searchResult as $resultBook) : ?>
                    <li>
                        <?php echo $resultBook->getTitle(); ?> - <?php echo $resultBook->getAuthor(); ?> 
                        (<?php echo $resultBook->isAvailable() ? 'Tersedia' : 'Sedang Dipinjam'; ?>)
                        <?php if (!$resultBook->isAvailable()) : ?>
                            <span class="borrowed-status">(Dipinjam)</span>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="book-list">
        <h2>Daftar Buku</h2>
        <p> Peringatan! <br> Hanya boleh meminjam 1 buku, apabila ingin meminjamkan lagi anda perlu mengembalikan terlebih dahulu buku yang sebelumnya dipinjam </p>
        <ul>
            <!-- Loop untuk mencetak semua buku -->
            <?php foreach ($books as $book) : ?>
                <li>
                    <?php echo $book->getTitle(); ?> - <?php echo $book->getAuthor(); ?> 
                    (<?php echo $book->isAvailable() ? 'Tersedia' : 'Sedang Dipinjam'; ?>)
                    <?php if ($book->isAvailable()): ?>
                        <form action="" method="post">
                            <input type="hidden" name="borrow_book" value="<?php echo htmlspecialchars($book->getTitle()); ?>">
                            <button class="borrow-btn" type="submit">Pinjam</button>
                        </form>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="hidden" name="return_book" value="<?php echo htmlspecialchars($book->getTitle()); ?>">
                            <button class="return-btn" type="submit">Kembalikan</button>
                        </form>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>

