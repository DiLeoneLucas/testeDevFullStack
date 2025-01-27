import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Login from './components/Login';
import UserManagement from './components/UserManagement';

const App = () => {
    return (
        <Router>
            <Routes>
                <Route path="/login" element={<Login />} />
                <Route path="/users" element={<UserManagement />} />
            </Routes>
        </Router>
    );
};

export default App;