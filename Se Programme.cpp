#include <iostream>
#include <cstring>
#include <cctype>

using namespace std;

// Function prototypes
void reverseString(const char* str);
void concatenateStrings(const char* str1, const char* str2);
void checkPalindrome(const char* str);
void copyString(const char* str);
void stringLength(const char* str);
void charFrequency(const char* str);
void countVowelsAndConsonants(const char* str);
void countDigitsAndSpaces(const char* str);

int main() {
    char inputString[100];  
    int choice;

    do {
        //  menu
        cout << "\nString Operations Menu:\n";
        cout << "1. Reverse a string\n";
        cout << "2. Concatenate strings\n";
        cout << "3. Check palindrome\n";
        cout << "4. Copy a string\n";
        cout << "5. Length of the string\n";
        cout << "6. Frequency of characters\n";
        cout << "7. Count vowels and consonants\n";
        cout << "8. Count digits and spaces\n";
        cout << "0. Exit\n";
        cout << "Enter your choice: ";
        cin >> choice;

        switch (choice) {
            case 1:
                cout << "Enter a string: ";
                cin.ignore();  // Ignore any newline character in the buffer
                cin.getline(inputString, sizeof(inputString));
                reverseString(inputString);
                break;
            case 2:
                cout << "Enter the first string: ";
                cin.ignore();
                cin.getline(inputString, sizeof(inputString));
                char secondString[100];
                cout << "Enter the second string: ";
                cin.getline(secondString, sizeof(secondString));
                concatenateStrings(inputString, secondString);
                break;
            case 3:
                cout << "Enter a string: ";
                cin.ignore();
                cin.getline(inputString, sizeof(inputString));
                checkPalindrome(inputString);
                break;
            case 4:
                cout << "Enter a string: ";
                cin.ignore();
                cin.getline(inputString, sizeof(inputString));
                copyString(inputString);
                break;
            case 5:
                cout << "Enter a string: ";
                cin.ignore();
                cin.getline(inputString, sizeof(inputString));
                stringLength(inputString);
                break;
            case 6:
                cout << "Enter a string: ";
                cin.ignore();
                cin.getline(inputString, sizeof(inputString));
                charFrequency(inputString);
                break;
            case 7:
                cout << "Enter a string: ";
                cin.ignore();
                cin.getline(inputString, sizeof(inputString));
                countVowelsAndConsonants(inputString);
                break;
            case 8:
                cout << "Enter a string: ";
                cin.ignore();
                cin.getline(inputString, sizeof(inputString));
                countDigitsAndSpaces(inputString);
                break;
            case 0:
                cout << "Exiting the program. Goodbye!\n";
                break;
            default:
                cout << "Invalid choice. Please enter a valid option.\n";
                break;
        }

    } while (choice != 0);

    return 0;
}

// Function to reverse a string
void reverseString(const char* str) {
    cout << "Reversed string: ";
    for (int i = strlen(str) - 1; i >= 0; --i) {
        cout << str[i];
    }
    cout << endl;
}

// Function to concatenate two strings
void concatenateStrings(const char* str1, const char* str2) {
    cout << "Concatenated string: " << str1 << str2 << endl;
}

// Function to check if a string is palindrome
void checkPalindrome(const char* str) {
    int length = strlen(str);
    bool isPalindrome = true;
    for (int i = 0; i < length / 2; ++i) {
        if (str[i] != str[length - i - 1]) {
            isPalindrome = false;
            break;
        }
    }
    if (isPalindrome) {
        cout << "The string is a palindrome.\n";
    } else {
        cout << "The string is not a palindrome.\n";
    }
}

// Function to copy a string
void copyString(const char* str) {
    char copiedString[100];
    strcpy(copiedString, str);
    cout << "Copied string: " << copiedString << endl;
}

// Function to find the length of a string
void stringLength(const char* str) {
    cout << "Length of the string: " << strlen(str) << endl;
}

// Function to find the frequency of each character in a string
void charFrequency(const char* str) {
    int frequency[256] = {0};  // Assuming ASCII characters

    for (int i = 0; i < strlen(str); ++i) {
        frequency[str[i]]++;
    }

    cout << "Character frequency:\n";
    for (int i = 0; i < 256; ++i) {
        if (frequency[i] > 0) {
            cout << (char)i << ": " << frequency[i] << " times\n";
        }
    }
}

// Function to count vowels and consonants in a string
void countVowelsAndConsonants(const char* str) {
    int vowels = 0, consonants = 0;

    for (int i = 0; i < strlen(str); ++i) {
        char ch = tolower(str[i]);
        if (ch >= 'a' && ch <= 'z') {
            if (ch == 'a' || ch == 'e' || ch == 'i' || ch == 'o' || ch == 'u') {
                vowels++;
            } else {
                consonants++;
            }
        }
    }

    cout << "Number of vowels: " << vowels << endl;
    cout << "Number of consonants: " << consonants << endl;
}

// Function to count digits and spaces in a string
void countDigitsAndSpaces(const char* str) {
    int digits = 0, spaces = 0;

    for (int i = 0; i < strlen(str); ++i) {
        if (isdigit(str[i])) {
            digits++;
        } else if (isspace(str[i])) {
            spaces++;
        }
    }

    cout << "Number of digits: " << digits << endl;
    cout << "Number of spaces: " << spaces << endl;
}

