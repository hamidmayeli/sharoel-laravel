# Database Backups

This directory contains MySQL database backups for the Laravel application.

## Usage

### Create a backup:
```bash
./docker-manage.sh backup
./docker-manage.sh backup my-custom-name
```

### List backups:
```bash
./docker-manage.sh backup-list
```

### Restore from backup:
```bash
./docker-manage.sh restore backup_2025-07-01_14-30-45.sql
```

## Backup Files

- Backups are automatically timestamped
- Files are in SQL format and can be opened with any text editor
- Safe to copy to external storage for additional backup security

## Important Notes

- Always backup before major changes or migrations
- Restore operations will overwrite all current database data
- Keep important backups in external storage (cloud, external drive, etc.)
