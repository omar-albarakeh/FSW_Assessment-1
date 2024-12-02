import React, { useContext } from "react";
import { ProjectsContext } from "../context/ProjectsContext";
import Project from "../components/Project";

const Projects = () => {
  const { projects, loading, error } = useContext(ProjectsContext);

  if (loading) return <p>Loading projects...</p>;
  if (error) return <p>Error: {error}</p>;

  return (
    <div className="projects-container">
      {projects.length > 0 ? (
        projects.map((p) => <Project project={p} key={p.id} />)
      ) : (
        <p>No projects available.</p>
      )}
    </div>
  );
};

export default Projects;
