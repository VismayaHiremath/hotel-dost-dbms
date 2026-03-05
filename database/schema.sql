CREATE TABLE Guests (
    guest_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    phone VARCHAR(20),
    address TEXT,
    ID_type VARCHAR(50)
);

CREATE TABLE Reservations (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    guest_id INT,
    check_in_date DATE,
    check_out_date DATE,
    special_requests TEXT,
    booking_source VARCHAR(50),
    FOREIGN KEY (guest_id) REFERENCES Guests(guest_id)
);

CREATE TABLE Rooms (
    room_id INT AUTO_INCREMENT PRIMARY KEY,
    room_type VARCHAR(50),
    view_type VARCHAR(50),
    price DECIMAL(10,2),
    status VARCHAR(20)
);

CREATE TABLE ReservationRooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT,
    room_id INT,
    FOREIGN KEY (reservation_id) REFERENCES Reservations(reservation_id),
    FOREIGN KEY (room_id) REFERENCES Rooms(room_id)
);

CREATE TABLE Payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT,
    amount DECIMAL(10,2),
    payment_method VARCHAR(50),
    transaction_id VARCHAR(100),
    invoice_number VARCHAR(100),
    FOREIGN KEY (reservation_id) REFERENCES Reservations(reservation_id)
);