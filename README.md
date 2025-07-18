# ClearSkyChart

This repository contains a simple web widget that fetches weather data for **Sutherland, South Africa** using the [Open-Meteo](https://open-meteo.com/) API. Because the service only provides roughly three months of historical hourly data, the widget requests the most recent 92 days of history and seven days of forecast data. It persists computed monthly averages in the browser. The page now shows a forecast for the next week (starting today), daily metrics for the previous week, 7/14/28‑day averages, and monthly averages for up to the last year. The monthly table only displays months that have a full set of data. The widget is implemented in `widget/index.html` and can be embedded in any webpage.

## Usage

1. Open `widget/index.html` in a browser. The script requests the most recent 92 days of historical data along with a 7‑day forecast from the Open-Meteo API. It displays four tables: a forecast for the next week, daily averages for the past week (yesterday back seven days), overall averages for 7, 14 and 28 day periods, and monthly averages based on stored history (up to the last 12 months will be shown and only completed months are displayed).
2. To embed the widget in another page, copy the file or include it with an `<iframe>`:
   ```html
   <iframe src="/path/to/widget/index.html" style="border:0;width:660px;height:600px"></iframe>
   ```

The code does not require any build step and only relies on the browser's fetch API. Internet access is required at runtime to retrieve data from Open-Meteo.

## Troubleshooting

If the widget displays **"Failed to load data"**, ensure that your network
allows connections to `api.open-meteo.com`. Some environments block external
requests, which will prevent the data from loading.
