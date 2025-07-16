# ClearSkyChart

This repository contains a simple web widget that fetches weather data for **Sutherland, South Africa** using the [Open-Meteo](https://open-meteo.com/) API. It now displays daily metrics for the last week, averages for 7, 14 and 28 day periods, and monthly averages for the last 12 months. The widget is implemented in `widget/index.html` and can be embedded in any webpage.

## Usage

1. Open `widget/index.html` in a browser. The script will request hourly data from the Open-Meteo API and display three tables: daily averages for the past 7 days, overall averages for 7, 14 and 28 day periods, and monthly averages for the last 12 months.
2. To embed the widget in another page, copy the file or include it with an `<iframe>`:
   ```html
   <iframe src="/path/to/widget/index.html" style="border:0;width:660px;height:600px"></iframe>
   ```

The code does not require any build step and only relies on the browser's fetch API. Internet access is required at runtime to retrieve data from Open-Meteo.
