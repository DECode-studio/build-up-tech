import Helmet from "react-helmet";
import { Route, Router, Routes } from 'react-router-dom';
import './App.css';
import Dashboard from './pages/dashboard';


const Head = () => {
  return (
    <Helmet>
      <title>Dashboard || Build Up Tech</title>
    </Helmet>
  )
}
function App() {
  return (
    <Router>
      <Routes>
        <Route exact path='/' element={<Dashboard />} />
      </Routes>
    </Router>
  );
}

export default App;
