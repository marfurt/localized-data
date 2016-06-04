let locales = NSLocale.availableLocaleIdentifiers().sort()
let currentLocale = NSLocale.currentLocale()
//let frLocale = NSLocale(localeIdentifier: "fr_FR")

for locale in locales {
	let language = currentLocale.displayNameForKey(NSLocaleLanguageCode, value: locale)
	
	print("\"\(locale)\" => \"\(language!)\"")
}