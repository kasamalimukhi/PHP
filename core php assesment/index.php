<?php
require_once 'functions.php';

while (true) {
    echo "\nE-Note Book Console Application\n\n";
    echo "1. Generate Note\n";
    echo "2. View Notes\n";
    echo "3. Clear All Notes\n";
    echo "4. Exit\n";
    echo "\nChoose an option: ";
    
    $choice = trim(fgets(STDIN));
    
    switch ($choice) {
        case 1:
            generateNote();
            break;
        case 2:
            viewNotes();
            break;
        case 3:
            clear_all_notes();
            break;
        case 4:
            exit("Goodbye!\n");
        default:
            echo "Invalid choice. Please try again.\n";
    }
}
?>