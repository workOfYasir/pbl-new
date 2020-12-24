#include <iostream>

using namespace std;

class car
{
    public:
        car();
        virtual ~car();
        void PrintCurrentCar() {
            cout << "COLOUR:     ";
            GetColour();
            cout << endl << "MAKE:       ";
            GetMake();
            cout << endl << "DIRECTION:  ";
            GetDirection();
            cout << endl << "MODEL:      ";
            GetModel();
            cout << endl << "SPEED:      ";
            GetSpeed();
            cout << endl << "-----------------------------------------" << endl;
        }
        unsigned int GetColour() {
             switch (m_Colour) {
                case 1:
                    cout << "Red";
                    break;
                case 2:
                    cout << "Blue";
                    break;
                case 3:
                    cout << "Green";
                    break;
                case 4:
                    cout << "Yellow";
                    break;
                default:
                    cout << "Invalid";
                    return false;
            }
            return true;
        }
        void SetColour(unsigned int val = 1) {
            if ((val > 4) || (val < 1)) {
                cout << "Error assigning colour. Use numbers 1-4 only";
            } else {
                m_Colour = val;
            }
        }

        unsigned int GetMake() {
            switch (m_Make) {
                case 1:
                    cout << "Ford";
                    break;
                case 2:
                    cout << "Honda";
                    break;
                case 3:
                    cout << "Toyota";
                    break;
                case 4:
                    cout << "Pontiac";
                    break;
                default:
                    cout << "Invalid";
                    return false;
            }
            return true;

        }
        void SetMake(unsigned int val = 1) {
            if ((val > 4) || (val < 1)) {
                cout << "Error assigning Make. Use numbers 1-4 only";
            } else {
                 m_Make = val;
            }
        }
        unsigned int GetModel() {
            switch (m_Model) {
                case 1:
                    cout << "Truck";
                    break;
                case 2:
                    cout << "Car";
                    break;
                case 3:
                    cout << "Van";
                    break;
                case 4:
                    cout << "Super Bike";
                    break;
                default:
                    cout << "Invalid";
                    return false;
            }
            return true;
        }
        void SetModel(unsigned int val = 1) {
            if ((val > 4) || (val < 1)) {
                cout << "Error assigning Model. Use numbers 1-4 only";
            } else {
                 m_Model = val;
            }
        }
        unsigned int GetSpeed() {
            cout << m_Speed << "km/h";
            return true;
        }
        void SetSpeed(unsigned int val) {
            if (val > 200) {
                    cout << "Too fast (max speed: 200km/h)";
            } else {
                m_Speed = val;
            }
        }
        unsigned int GetDirection() {
            switch (m_Direction) {
                case 1:
                    cout << "North";
                    break;
                case 2:
                    cout << "East";
                    break;
                case 3:
                    cout << "South";
                    break;
                case 4:
                    cout << "West";
                    break;
                default:
                    cout << "Invalid";
                    return false;
            }
            return true;
        }
        void SetDirection(unsigned int val = 1) {
            m_Direction = val;
        }
        void ChangeDirection(int val = 1) {
            int tempDirection = m_Direction + val;
            if (tempDirection > 4) {
                tempDirection -= 4;
            }
            if (tempDirection < 1) {
                tempDirection += 4;
            }
            SetDirection(tempDirection);
        }
    protected:
    private:
        unsigned int m_Colour;
        unsigned int m_Make;
        unsigned int m_Model;
        unsigned int m_Speed;
        unsigned int m_Direction;
}

return 0;
