CREATE TABLE "000-tugas" (
"id" INTEGER,
"deskripsi" TEXT NOT NULL,
"waktu" INTEGER NOT NULL,
PRIMARY KEY("id" AUTOINCREMENT)
);

INSERT INTO "000-tugas" ("deskripsi", "waktu") VALUES
('makan pagi', 60),
('kuliah', 360),
('latihan bulutangkis', 60),
('olah raga', 150),
('jalan-jalan', 100),
('berenang', 60),
('tidur', 480);
