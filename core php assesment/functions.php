<?php

define('NOTES_FILE', 'notes.json');

// generate a note
function generateNote() {
    while (true) {
        echo "Enter your name: ";
        $name = trim(fgets(STDIN));
        if (is_numeric($name)) {
            echo "Invalid input. \n";
        } else {
            break;
        }
    }

    echo "Enter the note title: ";
    $title = trim(fgets(STDIN));

    echo "Enter the note content: ";
    $content = trim(fgets(STDIN));

    $note = [
        'name' => $name,
        'title' => $title,
        'content' => $content,
        'timestamp' => date('Y-m-d H:i:s')
    ];
    
    $notes = loadNotes();
    $notes[] = $note;
    saveNotes($notes);
    
    echo "Note added successfully.\n";
}

// clear all notes
function clear_all_notes() {
    if (file_exists(NOTES_FILE)) {
        file_put_contents(NOTES_FILE, ''); // Clear contents of the notes file
        echo "All notes have been cleared.\n";
    } else {
        echo "Error: Notes file not found.\n";
    }
}

// view notes
function viewNotes() {
    $notes = loadNotes();
    
    if (empty($notes)) {
        echo "No notes found.\n";
    } else {
        foreach ($notes as $note) {
        
            echo "generator Name: " . $note['name'] . "\n";
            echo "E-note Title: " . $note['title'] . "\n";
            echo "E-note Content: " . $note['content'] . "\n";
            echo "Timestamp: " . $note['timestamp'] . "\n";
            echo "-------------------------\n";

        }
    }
}

// load notes from the file
function loadNotes() {
    if (file_exists(NOTES_FILE)) {
        $notesJson = file_get_contents(NOTES_FILE);
        return json_decode($notesJson, true);
    }   
    return [];
}

// save notes to the file
function saveNotes($notes) {
    $notesJson = json_encode($notes, JSON_PRETTY_PRINT);
    file_put_contents(NOTES_FILE, $notesJson);
}

?>