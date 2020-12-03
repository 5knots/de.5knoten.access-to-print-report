# Access to Print Case Report CiviCRM Extension

Manages access to the "Print Report" button in CiviCase. Gives access to all users with the right "access my cases" instead of only users with the right "access all cases".

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.0+
* CiviCRM 5.29 (and probably others)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl access-to-print-report@https://github.com/FIXME/access-to-print-report/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/access-to-print-report.git
cv en access_to_print_report
```

## Usage

Navigate to the CiviCRM Case overview. Use the print button even if you don't have access to all cases and activities.

## Known Issues

(* FIXME *)
