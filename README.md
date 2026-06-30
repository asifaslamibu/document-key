# Document Key (DocKey)

A PHP + MySQL document management system. Files are organized into cabinets and folders, with an access control layer (ACL) that grants users access to specific cabinets/folders, plus custom fields, file uploads, and a dashboard built on a Bootstrap admin template.

## Tech Stack

- **PHP** with **MySQLi**
- **MySQL** (`dockey` database — see `DK_Config/dockey.sql` and `custom_field.sql`)
- **HTML / CSS / JavaScript** on the **CORK** Bootstrap admin dashboard template
- **DataTables**, **Select2**, and related front-end plugins

## Features

- **Cabinets and folders** for organizing documents.
- **Access Control List (ACL)** — assign users access to specific cabinets and folders.
- **File upload and retrieval** with stored file metadata.
- **Custom fields** definable per document/file.
- Active/inactive status management for records.
- Admin **dashboard** with departments, cabinets, and folder management screens.
- Session-based authentication.

## Requirements

- PHP with the **MySQLi** extension
- MySQL / MariaDB
- A web server (Apache / XAMPP recommended)

## Installation & Setup

1. Copy the `DK_Config` folder into your web server document root (e.g. `htdocs/` under XAMPP). (`DK_2.zip` / `DK_Config.rar` are packaged copies of the source.)
2. Create a MySQL database named `dockey` and import `DK_Config/dockey.sql` (and `DK_Config/custom_field.sql` for custom fields).
3. Update the database credentials in `DK_Config/config_indemnifier.php` if they differ from the default (`localhost` / `root` / no password).
4. Ensure the upload directories are writable.
5. Start Apache and open the dashboard (e.g. `DK_Config/dash.php`) in your browser.

## Usage

- `dash.php` — main dashboard.
- `cabinets.php` — manage cabinets.
- `acl.php` / `acl/insert.php` / `acl/fetch.php` — manage user access to cabinets and folders.
- `file_upload.php` / `files/` — upload and retrieve documents.
- `create/custom_field.php` — define custom fields.

## Project Structure

```
DK_Config/
  config_indemnifier.php   MySQLi database connection
  dash.php                 Dashboard
  acl.php, acl/            Access control (assign users to cabinets/folders)
  cabin/, cabinet/, folder/  Cabinet and folder CRUD
  create/                  Custom fields and active/inactive toggles
  files/, file_upload.php  File upload and retrieval
  dockey.sql, custom_field.sql  Database dumps
  assets/, bootstrap/      CORK admin template assets
```

## License

This project is for educational/portfolio purposes. The bundled CORK admin template retains its own license.
