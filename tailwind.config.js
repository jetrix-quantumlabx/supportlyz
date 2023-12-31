/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.php"],
  theme: {
    extend: {
      animation: {
        "spin-slow": "spin 25s linear infinite",
      },
      colors: {
        geyser: {
          100: "#EDF2F5",
          200: "#d9e4ea",
          300: "#a9c3d0",
          400: "#7ba2b5",
          500: "#5a879d",
          600: "#466d83",
          700: "#3a596a",
          800: "#334c59",
          900: "#2e414c",
        },
        primary: {
          100: "#C1F0D3",
          200: "#ACF0C2",
          300: "#96EFB1",
          400: "#80EEA0",
          500: "#6AED8F",
          600: "#54EC7E",
          700: "#3FEC6D",
          800: "#29EB5C",
          900: "#13EA4B",
        },
        secondary: {
          100: "#C6EADA",
          200: "#B3E5CD",
          300: "#9FE1C0",
          400: "#8BDDB2",
          500: "#78D9A5",
          600: "#65D598",
          700: "#51D08B",
          800: "#3ECC7D",
          900: "#2AC870",
        },
        tertiary: {
          100: "#BFDCDB",
          200: "#A8D1CE",
          300: "#91C6C1",
          400: "#7ABAB4",
          500: "#63AFA8",
          600: "#4CA49B",
          700: "#35998E",
          800: "#1E8E81",
          900: "#068374",
        },
        quaternary: {
          100: "#C1CFD1",
          200: "#ABBEBE",
          300: "#95ADAC",
          400: "#7F9C9A",
          500: "#698A88",
          600: "#537975",
          700: "#3d6863",
          800: "#265651",
          900: "#10453F",
        },
        penitentiary: {
          100: "#C2CACE",
          200: "#ACB6BA",
          300: "#EDF2F5",
          400: "#96A2A6",
          500: "#6B7A7F",
          600: "#56666B",
          700: "#405157",
          800: "#2A3D44",
          900: "#152930",
        },
      },
      boxShadow: {
        "gray-5": "0 10px 20px rgba(104, 134, 193, 0.05)",
        "gray-10": "0 10px 20px rgba(104, 134, 193, 0.10)",
        "gray-20": "0 10px 20px rgba(104, 134, 193, 0.20)",
        "secondary-40": "0 10px 20px rgba(42, 200, 112, 0.4)",
        "secondary-50": "0 10px 20px rgba(42, 200, 112, 0.5)",
      },
    },
  },
  plugins: [],
};
